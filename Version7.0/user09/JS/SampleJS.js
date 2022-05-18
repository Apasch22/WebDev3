function bigImg(x) {
    x.style.height = "45%";
    x.style.width = "45%";
 }
 
 function normalImg(x) {
    x.style.height = "40%";
    x.style.width = "40%";
 }

 function bigImg2(x) {
    x.style.height = "55%";
    x.style.width = "55%";
 }
 
 function normalImg2(x) {
    x.style.height = "50%";
    x.style.width = "50%";
 }
 var countDownDate = new Date("Jun 3, 2022 12:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);

function Ans1(){
    document.getElementById('myText').innerHTML = '<strong>Wrong! Try Again!</strong>';
  }
function Ans2(){
    document.getElementById('myText').innerHTML = '<strong>Correct!</strong>';
  }
function Ans3(){
    document.getElementById('myText').innerHTML = '<strong>So Close! Try Again!</strong>';
  }
function Ans4(){
    document.getElementById('myText').innerHTML = '<strong>Almost! Try Again!</strong>';
  }