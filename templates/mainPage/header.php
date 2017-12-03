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
      <div>
        <button class="buttonIcons" type="button"><i class="material-icons md-light">dehaze</i></button>
      </div>
      <div id= "info">
        <img src="resources/images/logo.svg"/>
        <h1><a href="index.php" style='color:white'>To-Do Master</a></h1>
      </div>
      <div id="lists">
        <form action="lists.php" method="post">
        <input type="image" src="resources/images/icons/lists.svg" alt="viewProfile" />
        </form>
      </div>
      <div id="profile">
        <form action="profile.php" method="post">
        <input type="image" src="resources/images/icons/account.svg" alt="viewProfile" />
        </form>
      </div>
      <div id="logout">
        <form action="signOut.php" method="post">
        <input type="image" src="resources/images/icons/logout.svg" alt="Submit Form" />
        </form>
      </div>

    </header>
