document.getElementById("logout").onclick = function(){
  location.href = "signOut.php";
}


document.getElementById("lists").onclick = function(){
  location.href = "index.php";
}

let change = document.querySelector('#about');
  change.addEventListener('click', changeAbout);

function changeAbout(event){
  event.preventDefault();
  document.querySelector('#about').removeEventListener('click', changeAbout);


  let element = event.currentTarget.getElementsByTagName("a")[1];
  let text = element.innerHTML;
  element.parentNode.removeChild(element);
  event.currentTarget.innerHTML += '<form class="changeAbout" action="changeAbout.php" method="post"> '
        + '<div class="innerChangeAbout">'
        + '<textarea rows="5" id="aboutToChange" name="about">' + text + '</textarea> '
        + '<button class="submitAddAbout" type="submit"><p>Change About</p></button>'
        + '</div> </form>';

}
