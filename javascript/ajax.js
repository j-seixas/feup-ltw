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
    alert(id);

  let tasks = [];
  let tasksDiv = document.querySelectorAll('#itemsAddList .todoItems');
  for(let i = 0; i < tasksDiv.length; i++){
    if(tasksDiv[i].value != '')
      tasks.push(tasksDiv[i].value);
  }

  let tasksStr = tasks.join();
  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveLists);
  request.open('POST', 'add_list.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({title: title, id: id, tasks: tasksStr}));

  alert("aaaa");
}

function receiveLists(data){
  let section = document.querySelector('#listsDiv');
  let response = JSON.parse(this.responseText);
  let list = response.list;
  let tasks = response.tasks;

  let listEl = document.createElement('div');
  listEl.classList.add('list');
  listEl.setAttribute('id',  list.idList );

  listEl.innerHTML = '<div class="title"> <a>' + list.title +
  '</a> </div>';


  for(let i = 0; i < tasks.length ; i++){
    listEl.innerHTML += '<label> <input type="checkbox" > ' + tasks[i].description + '</label><br>';
  }

  section.appendChild(listEl);


}
