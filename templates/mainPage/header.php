<!DOCTYPE html>
<html>

  <head>
    <title>To-Do Master</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mainStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="javascript/script.js" defer></script>
    <script src="javascript/ajaxNewList.js" defer></script>
    <script src="javascript/ajaxRemoveTask.js" defer></script>
    <script src="javascript/ajaxUpdateTask.js" defer></script>
    <script src="javascript/ajaxRemoveList.js" defer></script>
    <script src="javascript/ajaxAddTaskToList.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <header>
      <span class="buttonsLeft">
        <button id="add" class="buttonIcons" type="button"><i class="material-icons">note_add</i></button>
      </span>

      <span class="buttonsRight">
        <button id="logout" class="buttonIcons" type="button"><i class="material-icons">exit_to_app</i></button>

      </span>
      <span class="buttonsRight">
        <button id="profile" class="buttonIcons" type="button">
          <i class="material-icons">account_circle</i>
        </button>

      </span>

    </header>
