document.getElementById("logout").onclick = function(){
  location.href = "signOut.php";
}


document.getElementById("add").onclick = function(){
  if(document.getElementById("sideBarAdd").style.width == "300px"){
    document.getElementById("sideBarAdd").style.width = "0px";
    document.getElementById("listsDiv").style.borderLeft = "0px solid";

    let element = document.getElementById("sideBarAdd");
    let parent = element.parentNode;
    let div = document.createElement('div');

    div.setAttribute('id', 'sideBarAdd');
    div.setAttribute('class', 'sideBar');
    div.innerHTML =   '<div class="form"> <form name="addList" id="addList" method="post">'
    + '<div id="listAddDiv"> <input type="text" placeholder="Title" name="title" required><br><br>'
    + '<div id="itemsAddList"></div> <div class="buttonAddTask">'
    + '<button id="addTask" type="button"><i class="material-icons">add</i><p>Add Task</p></button></div>'
    + '<input type="submit" value="Create new list" ></div> </form></div>';
    parent.insertBefore(div, document.getElementById("listsDiv"));

    setTimeout(function(){
      document.getElementById("sideBarAdd").parentNode.removeChild(element);
      setAddTask();
      let addListForm = document.querySelector('.sideBar .form form');
      addListForm.addEventListener('submit', newList);
    },550);

  }else{
    document.getElementById("sideBarAdd").style.width = "300px";
    document.getElementById("listsDiv").style.borderLeft = "300px solid";
  }
}

document.getElementById("profile").onclick = function(){
  location.href = "profile.php";
}

function setAddTask(){
  document.getElementById("addTask").onclick = function(){
    let todoIt = document.createElement("input");
    todoIt.setAttribute('type', 'text');
    todoIt.setAttribute('class', 'todoItems');
    todoIt.setAttribute('placeholder', 'TODO Item');
    todoIt.setAttribute('name', 'todoitem');
    let br = document.createElement("br");
    let addList = document.getElementById("itemsAddList");
    addList.appendChild(todoIt);
    addList.appendChild(br);
  }
}

setAddTask();

function resetButton(){
  document.getElementById("add").click();
}
