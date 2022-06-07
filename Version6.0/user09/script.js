function changeText() {
  document.getElementById("textChange").innerHTML =
    "Thanks for liking my Webpage";
}
var space = " ";
var pos = 0;
var msg = "User #9";

function Scroll() {
  document.title =
    msg.substring(pos, msg.length) + space + msg.substring(0, pos);

  pos++;
  if (pos > msg.length) pos = 0;
  window.setTimeout("Scroll()", 0);
}
Scroll();
function showMsg() {
  var userInput = document.getElementById("userInput").value;
  document.getElementById("userMsg").innerHTML = userInput;
}
function changeColor() {
  var newColor = document.getElementById("colorPicker").value;
  document.getElementById("colorMsg").style.background = newColor;
}
function Msg1() {
  document.getElementById("myText").innerHTML = " <strong>Nice!</strong>";
}
function Msg2() {
  document.getElementById("myText").innerHTML = "<strong>Try again...</strong>";
}
function outOrder() {
  alert("Sorry! This Textbox is Currently Under Maintenance");
}
function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("No ;P");
}
function myFunction() {
  document.getElementById("demo").innerHTML = "I'm Blue Now!";
}
function bigImg(x) {
  x.style.height = "64px";
  x.style.width = "64px";
}

function normalImg(x) {
  x.style.height = "32px";
  x.style.width = "32px";
}