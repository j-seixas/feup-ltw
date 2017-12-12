let deleteButton = document.querySelectorAll('.delete');
for(let i = 0; i < deleteButton.length; i++)
  deleteButton[i].addEventListener('click', deleteList);

function deleteList(event) {
  event.preventDefault();

  let id = event.currentTarget.parentNode.parentNode.id;

  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveRemovedList);
  request.open('POST', 'remove_list.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({id: id}));

}

function receiveRemovedList(data){

  let id = JSON.parse(this.responseText);

  let element = document.getElementById(id);
  element = element.parentNode;
  element.parentNode.removeChild(element);
  

}
