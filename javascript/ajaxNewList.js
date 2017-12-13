let addListForm = document.querySelector('.sideBar .form form');
addListForm.addEventListener('submit', newList);

function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}

function newList(event) {
  event.preventDefault();

  let title = document.querySelector('#listAddDiv input[name=title]').value;

  let id = 0;
  let lists = document.getElementsByClassName('list');

  for(let i = 0; i < lists.length ; i++){
    id = id <= Number(lists[i].id) ? Number(lists[i].id) : id;
  }

  let tasks = [];
  let tasksDiv = document.querySelectorAll('#itemsAddList .todoItems');
  for(let i = 0; i < tasksDiv.length; i++){
    if(tasksDiv[i].value != '')
      tasks.push(tasksDiv[i].value);
  }

  let tasksStr;
  if(tasks.length > 0)
    tasksStr = tasks.join();
  else
    tasksStr = '';
  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveLists);
  request.open('POST', 'add_list.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({title: title, id: id, tasks: tasksStr}));

  resetButton();

}

function receiveLists(data){
  let section = document.querySelector('#listsDiv');
  let response = JSON.parse(this.responseText);
  if(response instanceof Array){
  let list = response.list;
  let tasks = response.tasks;

  let listDiv = document.createElement('div');
  listDiv.classList.add('listDiv');
  let listEl = document.createElement('div');
  listEl.classList.add('list');
  listEl.setAttribute('id',  list.idList );

  listEl.innerHTML = '<div class="title"> <p>' + list.title +
  '</p> <button class="delete"><i class="material-icons">delete</i></button></div> ';



  let checkboxes = document.createElement('div');
  checkboxes.classList.add('checkboxes');
  for(let i = 0; i < tasks.length ; i++){
    checkboxes.innerHTML += '<div class="task" id="task' + tasks[i].idItem + '"> <button class="uncheckedButton" type="button">' +
    '<i class="material-icons">check_box_outline_blank</i><p>' + tasks[i].description + '</p></button>' +
    '<button class="erase"><i class="material-icons">close</i></button> </div>';
  }


  listEl.appendChild(checkboxes);
  listEl.innerHTML += '<form class="addTaskFromList" method="post"> ' +
      '<div class="innerAddTask"> <input type="text" class="taskToAdd" placeholder="Task" name="task">' +
      '<button class="submitAddTask" type="submit"><i class="material-icons">add</i></button> </div> </form>';
  listDiv.appendChild(listEl);
  section.insertBefore(listDiv, section.childNodes[0]);

  let eraseButton = document.querySelectorAll('.checkboxes .task .erase');
  for(let i = 0; i < eraseButton.length; i++)
    eraseButton[i].addEventListener('click', eraseTask);

  let uncheckedButt = document.querySelectorAll('.checkboxes .task .uncheckedButton');
  for(let i = 0; i < uncheckedButt.length; i++)
    uncheckedButt[i].onclick = checkB;

  let deleteButton = document.querySelectorAll('.title .delete');
  for(let i = 0; i < deleteButton.length; i++)
    deleteButton[i].addEventListener('click', deleteList);

  let addTask = document.querySelectorAll('.addTaskFromList');
  for(let i = 0; i < addTask.length; i++)
    addTask[i].addEventListener('submit', addTaskToList);

  } else {
    alert(response);
  }
}
