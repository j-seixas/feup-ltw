<!DOCTYPE html>
<html>

  <head>
    <title>To-Do Master</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mainStyle.css">
    <link rel="stylesheet" href="resources/fonts/S_Hand.ttf" />
    <link rel="stylesheet" href="resources/fonts/The_Blacklist.ttf" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <header>
      <span class="buttonsLeft">
        <button id="add" class="buttonIcons" type="button"><i class="material-icons">add_circle_outline</i></button>
        <script>
          document.getElementById("add").onclick = function(){
            if(document.getElementById("sideBarAdd").style.width == "300px"){
              document.getElementById("sideBarAdd").style.width = "0px";
              document.getElementById("listsDiv").style.marginLeft = "15px";
            }else{
              document.getElementById("sideBarAdd").style.width = "300px";
              document.getElementById("listsDiv").style.marginLeft = "315px";
            }
          };
        </script>
      </span>

      <span class="buttonsLeft">
        <button id="edit" class="buttonIcons" type="button"><i class="material-icons">mode_edit</i></button>
        <script>
          document.getElementById("edit").onclick = function(){
            location.href = "index.php";
          };
        </script>
      </span>
      <span class="buttonsRight">
        <button id="logout" class="buttonIcons" type="button"><i class="material-icons">exit_to_app</i></button>
        <script>
        document.getElementById("logout").onclick = function(){
          location.href = "signOut.php";
        };
        </script>
      </span>
      <span class="buttonsRight">
        <button id="profile" class="buttonIcons" type="button">
          <i class="material-icons">account_circle</i>
        </button>
        <script>
          document.getElementById("profile").onclick = function(){
            location.href = "profile.php";
          };
        </script>
      </span>
      <span class="buttonsRight">
        <button id="lists" class="buttonIcons" type="button"><i class="material-icons">assignment</i></button>
        <script>
        document.getElementById("lists").onclick = function(){
          location.href = "lists.php";
        };
        </script>
      </span>

    </header>
