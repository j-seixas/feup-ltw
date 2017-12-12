let checkedButt = document.querySelectorAll('.checkedButton');
for(let i = 0; i < checkedButt.length; i++)
  checkedButt[i].onclick = uncheckB;

let uncheckedButt = document.querySelectorAll('.uncheckedButton');
for(let i = 0; i < uncheckedButt.length; i++)
  uncheckedButt[i].onclick = checkB;

function checkB(event){
  event.preventDefault();

  sendReq(event, 1);
}

function uncheckB(event){
  event.preventDefault();
  sendReq(event, 0);
}

function sendReq(event, bool) {
  let idTemp = event.currentTarget.parentNode.id;

  let id = idTemp.substr(4, idTemp.length - 1);

  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveUpdated);
  request.open('POST', 'update_task.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({id: id, bool: bool}));

}

function receiveUpdated(data){
  let response = JSON.parse(this.responseText);
  let idTemp = response.id;

  let id = "task" + idTemp;


  let elementParent = document.getElementById(id);
  let bool = response.bool;

  let element = elementParent.getElementsByTagName('button')[0];

  if(bool == 1){

    element.setAttribute('class', 'checkedButton');
    element.firstChild.innerHTML = 'check_box';
    element.onclick = uncheckB;

  }else if (bool == 0){

    element.setAttribute('class', 'uncheckedButton');
    element.firstChild.innerHTML = 'check_box_outline_blank';
    element.onclick = checkB;
  }

}
