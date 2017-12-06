<div id="sideBarAdd" class="sideBar">

  <div class="form">
    <form name="addList" id="addList" action="index.php" method="post" onSubmit="">
      <div id="listAddDiv">
        <input type="text" placeholder="Title" name="title" required><br><br>
        <div id="itemsAddList">
          <input type="text" class="todoItems" placeholder="TODO Item" name="todoitem"><br>

        </div>
        <div class="buttonAddTask">
          <button id="addTask" type="button"><i class="material-icons">add_circle_outline</i><p>Add TODO task</p></button>
          <script>
          document.getElementById("addTask").onclick = function(){
            let todoIt = document.createElement("input");
            todoIt.setAttribute('class', 'todoItems');
            todoIt.setAttribute('placeholder', 'TODO Item');
            todoIt.setAttribute('name', 'todoitem');
            let br = document.createElement("br");
            let addList = document.getElementById("itemsAddList");
            addList.appendChild(todoIt);
            addList.appendChild(br);
          };
          </script>
        </div>
        <input type="submit" value="Create new list" >
      </div>
    </form>
  </div>
</div>
