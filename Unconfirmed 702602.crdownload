/*{
var i = 0;
var txt = "Scriptoriums";
var speed = 100;

    function typeWritter() {
        if (i < txt.length) {
        document.getElementById("x").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWritter, speed);
        }
    }

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}


// when a user submits a form

function onSubmitForm(data) {
  submitToServer(data);
  localStorage.setItem("has entered", true);
}*/
// Create a new list item when clicking on the "Add" button
//if (typeof(Storage) !== "undefined") {
function newElement() {
  var li = document.createElement("h4");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
    if (inputValue === '') {
        alert("You must write something!");
    } else {
        document.getElementById("myUL").appendChild(li);
        document.getElementById("myInput").value = "";
        //document.getElementById("myBtn").style.display = "none";
        document.getElementById("John1").style.textDecoration = "line-through";
        //modal.style.display = "none";
        localStorage.setItem("has entered", true);
    }    
}
/*const didThisUserSubmitTheFormBefore = localStorage.getItem("has entered");
if(didThisUserSubmitTheFormBefore) {
  // the user submitted the form before
  newElement();
}  else {
  prompt("error");
}*/
var i = 0;
var txt = "ScriptureFest";
var speed = 100;

    function typeWritter() {
        if (i < txt.length) {
        document.getElementById("x").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWritter, speed);
        }
    }

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Create a new list item when clicking on the "Add" button
function newElemen() {
    const didThisUserSubmitTheFormBefore = localStorage.getItem("has entered");
    if(didThisUserSubmitTheFormBefore) return;
    var li = document.createElement("h4");
    var inputValue = document.getElementById("myInput").value;
    var t = document.createTextNode(inputValue);
    li.appendChild(t);
    if (inputValue === '') {
        //alert("You must write something!");
    } else {
        document.getElementById("myUL").appendChild(li);
        document.getElementById("myInput").value = "";
        //document.getElementById("myBtn").style.display = "none";
        document.getElementById("John1").style.textDecoration = "line-through";
        //modal.style.display = "none";
        localStorage.setItem("has entered", true);
    }
}
