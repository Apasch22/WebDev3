function myFunction3() {
    location.replace("https://www.w3schools.com")
  }

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
  }

/*
Options
(Note: each option beats the next option in the array
although the last option in the array beats the first.
This means you can add more options if you wish.)
*/
const options = [ "rock", "scissors", "paper" ];

// do while ensures the body is executed at least once
do {
	// get user input
	let input = window.prompt(options.map((option, idx) => "enter " + idx + " for " + option).join(", "));
	// check if the user pressed "Ok" or "Cancel"
	if (typeof input === "string") {
		// remove all non-numeric characters from input
		input = input.replace(/[^0-9]/g, "");
		// if the user has input a valid number
		if (options[input]) {
			// print the user's choice
			window.alert("You picked " + options[input] + "!");
			// generate the computer's choice
			const computer_choice = ~~(Math.random() * options.length);
			// print the computer's choice
			window.alert("The computer picked " + options[computer_choice] + "!");
			// process choices
			let you_beat = input + 1, computer_beats = computer_choice + 1;
			if (you_beat > options.length) {
				you_beat = 0;
			}
			if (computer_beats > options.length) {
				computer_beats = 0;
			}
			// print outcome
			if (you_beat === computer_choice) {
				window.alert("You win! :D");
			} else if (computer_beats === input) {
				window.alert("You loose... :(");
			} else {
				window.alert("It was a tie! :|");
			}
        } else {
			window.alert("Oh no! You didn't enter a number...");
		}
	} else {
		window.alert("Woops! You didn't enter anything or your input was not in the correct format...");
	}
} while (window.confirm("Play again?"));

 function Hello() {
    var copyText = document.getElementById('myInput')
    copyText.select();
    document.execCommand('copy')
    console.log('Copied Text')
  }

function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
   }
   var space = " ";
var pos = 0;
var msg = "User 03";



function myFunction() {
    alert("You pressed a key inside the input field");
  }

function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
      text = "The shift key was pressed!";
    }
    document.getElementById("demo").innerHTML = text;
  }




function Scroll(){
    
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);



pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();



  writeRandomQuote = function () {

    var quotes = new Array();
    quotes[0] = "Action is the real measure of intelligence.";
    quotes[1] = "Baseball has the great advantage over cricket of being sooner ended.";
    quotes[2] = "Every goal, every action, every thought, every feeling one experiences, whether it be consciously or unconsciously known, is an attempt to increase one's level of peace of mind.";
    quotes[3] = "A good head and a good heart are always a formidable combination.";
    var rand = Math.floor(Math.random()*quotes.length);
    document.write(quotes[rand]);
  }


  writeRandomQuote();