let addTask = document.querySelectorAll('.addTaskFromList');
for(let i = 0; i < addTask.length; i++)
  addTask[i].addEventListener('submit', addTaskToList);

function addTaskToList(event) {
  event.preventDefault();

  let parentNode = event.currentTarget.parentNode;
  let id = parentNode.id;

  let task = parentNode.getElementsByTagName('form')[0].querySelector('.innerAddTask .taskToAdd').value;
  console.log(task);
  console.log(id);

  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveTaskOfList);
  request.open('POST', 'add_task_to_list.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({id: id, task: task}));

}

function receiveTaskOfList(data){
  console.log(this.response);
  let response = JSON.parse(this.responseText);
  let id = response.id;
  let task= response.task;

  document.getElementById(id).getElementsByClassName('checkboxes')[0].innerHTML +='<div class="task" id="task' + task.idItem + '"> <button class="uncheckedButton" type="button">' +
  '<i class="material-icons">check_box_outline_blank</i><p>' + task.description + '</p></button>' +
  '<button class="erase"><i class="material-icons">close</i></button> </div>';

  let eraseButton = document.querySelectorAll('.checkboxes .task .erase');
  for(let i = 0; i < eraseButton.length; i++)
    eraseButton[i].addEventListener('click', eraseTask);

  let uncheckedButt = document.querySelectorAll('.checkboxes .task .uncheckedButton');
  for(let i = 0; i < uncheckedButt.length; i++)
    uncheckedButt[i].onclick = checkB;

  let checkedButt = document.querySelectorAll('.checkboxes .task .checkedButton');
  for(let i = 0; i < checkedButt.length; i++)
    checkedButt[i].onclick = uncheckB;

}
