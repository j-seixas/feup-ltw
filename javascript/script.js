document.getElementById("logout").onclick = function(){
  location.href = "signOut.php";
}


document.getElementById("add").onclick = function(){
  if(document.getElementById("sideBarAdd").style.width == "300px"){
    document.getElementById("sideBarAdd").style.width = "0px";
    document.getElementById("listsDiv").style.borderLeft = "0px solid";
  }else{
    document.getElementById("sideBarAdd").style.width = "300px";
    document.getElementById("listsDiv").style.borderLeft = "300px solid";
  }
}

document.getElementById("profile").onclick = function(){
  location.href = "profile.php";
}

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
