let eraseButton = document.querySelectorAll('#listsDiv .listDiv .list .checkboxes .task .erase');
for(let i = 0; i < eraseButton.length; i++)
  eraseButton[i].addEventListener('click', eraseTask);

function eraseTask(event) {
  event.preventDefault();

  let idTemp = (event.currentTarget).parentNode.id;

  let id = idTemp.substr(4, idTemp.length - 1);


  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveRemovedTask);
  request.open('POST', 'remove_task.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({id: id}));

}

function receiveRemovedTask(data){

  let idTemp = JSON.parse(this.responseText);

  let id = "task" + idTemp;

  let element = document.getElementById(id);
  element.parentNode.removeChild(element);

}
