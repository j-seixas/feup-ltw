let addListForm = document.querySelector('.sideBar .form form');
addListForm.addEventListener('submit', newList);

function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}

function newList(event) {
  alert("aaaa");
  let title = document.querySelector('#listAddDiv input[name=title]').value;
alert("aaaa");
  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveList);
  request.open('POST', 'add_list.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({title: title}));
alert("aaaa");
  event.preventDefault();
}

function receiveLists(data){
  let section = document.querySelector();
  let lists = JSON.parse(this.responseText);

  for (let i = 0; i < lists.length; i++) {
    let list = document.createElement('div');
    list.classList.add('list');

    list.innerHTML = '<div class="title"> <a>' + lists[i].title +
    '</a> </div>';

    let listsDiv = document.querySelector('#listsDiv');
    alert("aaaa");
    section.insertAfter(list, listsDiv);
  }
}

function receiveComments(data) {
  let section = document.querySelector('#comments');
  let comments = JSON.parse(this.responseText);

  for (let i = 0; i < comments.length; i++) {
    let comment = document.createElement('article');
    comment.classList.add('comment');

    comment.innerHTML = '<span class="id">' +
      comments[i].id + '</span><span class="user">' +
      comments[i].name + '</span><span class="date">' +
      new Date(comments[i].published * 1000).toLocaleDateString() + ' '  +
      new Date(comments[i].published * 1000).toLocaleTimeString() + '</span><p>' +
      comments[i].text + '</p>';

    section.insertBefore(comment, commentForm);
  }
}
