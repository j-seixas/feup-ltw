document.getElementById("logout").onclick = function(){
  location.href = "signOut.php";
}


document.getElementById("add").onclick = function(){
  if(document.getElementById("sideBarAdd").style.width == "300px"){
    document.getElementById("sideBarAdd").style.width = "0px";
    document.getElementById("listsDiv").style.marginLeft = "15px";
  }else{
    document.getElementById("sideBarAdd").style.width = "300px";
    document.getElementById("listsDiv").style.marginLeft = "315px";
  }
}

document.getElementById("edit").onclick = function(){
  location.href = "index.php";
}

document.getElementById("profile").onclick = function(){
  location.href = "profile.php";
}

document.getElementById("lists").onclick = function(){
  location.href = "lists.php";
}
