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
  console.log(lists);
  for(let i = 0; i < lists.length ; i++){
    id = id <= Number(lists[i].id) ? Number(lists[i].id) : id;
  }
    alert(id);

  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveLists);
  request.open('POST', 'add_list.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({title: title, id: id}));
}

function receiveLists(data){
  let section = document.querySelector('#listsDiv');
  let lists = JSON.parse(this.responseText);

  for (let i = 0; i < lists.length; i++) {
    let list = document.createElement('div');
    list.classList.add('list');
    list.setAttribute('id',  lists[i].idList );

    list.innerHTML = '<div class="title"> <a>' + lists[i].title +
    '</a> </div>';


    section.appendChild(list);
  }

}
