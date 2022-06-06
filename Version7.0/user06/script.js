const toggle = document.getElementById("toggle");

toggle.addEventListener("change", (e) => {
    document.body.classList.toggle("dark", e.target.checked);
});

function calc() {

    first = document.loveform.name1.value.toUpperCase();
    firstlength = document.loveform.name1.value.length;
    second = document.loveform.name2.value.toUpperCase();
    secondlength = document.loveform.name2.value.length;
    var LoveCount = 0;

    for (Count = 0; Count < firstlength; Count++) {
        letter1 = first.substring(Count, Count + 1);
        if (letter1 == 'L') LoveCount += 2;
        if (letter1 == 'O') LoveCount += 2;
        if (letter1 == 'V') LoveCount += 2;
        if (letter1 == 'E') LoveCount += 2;
        if (letter1 == 'Y') LoveCount += 3;
        if (letter1 == 'O') LoveCount += 1;
        if (letter1 == 'U') LoveCount += 3;
    }

    for (Count = 0; Count < secondlength; Count++) {
        letter2 = second.substring(Count, Count + 1);
        if (letter2 == 'L') LoveCount += 2;
        if (letter2 == 'O') LoveCount += 2;
        if (letter2 == 'V') LoveCount += 2;
        if (letter2 == 'E') LoveCount += 2;
        if (letter2 == 'Y') LoveCount += 3;
        if (letter2 == 'O') LoveCount += 1;
        if (letter2 == 'U') LoveCount += 3;
    }

    amount = 0;
    if (LoveCount > 0) amount = 5 - ((firstlength + secondlength) / 2)
    if (LoveCount > 2) amount = 10 - ((firstlength + secondlength) / 2)
    if (LoveCount > 4) amount = 20 - ((firstlength + secondlength) / 2)
    if (LoveCount > 6) amount = 30 - ((firstlength + secondlength) / 2)
    if (LoveCount > 8) amount = 40 - ((firstlength + secondlength) / 2)
    if (LoveCount > 10) amount = 50 - ((firstlength + secondlength) / 2)
    if (LoveCount > 12) amount = 60 - ((firstlength + secondlength) / 2)
    if (LoveCount > 14) amount = 70 - ((firstlength + secondlength) / 2)
    if (LoveCount > 16) amount = 80 - ((firstlength + secondlength) / 2)
    if (LoveCount > 18) amount = 90 - ((firstlength + secondlength) / 2)
    if (LoveCount > 20) amount = 100 - ((firstlength + secondlength) / 2)
    if (LoveCount > 22) amount = 110 - ((firstlength + secondlength) / 2)

    if (firstlength == 0 || secondlength == 0) amount = "Err";
    if (amount < 0) amount = 0;
    if (amount > 99) amount = 99;

    document.loveform.output.value = amount + "%";
}
/**
* Hangman in Vanilla Javascript
* @see https://github.com/jelofsson/hangman-js
* @author jelofsson
**/
var Hangman = (function () {
    'use strict';

    /**
     * Constructor
     * @param {string} elId An ID used in this class and when rendering the DOM Elements
     */
    function Hangman(elId) {
        // DOM is ready
        this.elId       = elId;
        // Possible words
        this.words      = [
            'PROGRAMMER', 'BRAINSTORM', 'CREATIVE', 'LOLLIPOP',
            'CULTURE', 'RAZORSHARP', 'SCREWDRIVER', 'TYPEWRITER'
        ];
    }

    /**
     * Resets the hangman game
     */
    Hangman.prototype.reset = function () {
        // Variables
        this.STOPPED        = false;
        this.MISTAKES       = 0;
        this.GUESSES        = [];
        // Select a random word from the list
        this.WORD           = this.words[Math.floor(Math.random() * this.words.length)];
        // DOM Elements
        this.hideElementByClass('h');
        this.showElementByIdWithContent(this.elId + "_guessbox", null);
        this.showElementByIdWithContent(this.elId + "_word", this.getGuessedfWord());
    };

    /**
     * Logic after the user guessed on a letter
     *
     * @param {char} letter A letter guessed by our enduser
     */
    Hangman.prototype.guess = function (letter) {
        letter = letter.charAt(0).toUpperCase();

        // Check if game is stopped or the user already guessed on that letter
        if (this.STOPPED || this.GUESSES.indexOf(letter) > -1) {
            // Then we wont do anything
            return;
        }

        // Add the letter to our GUESSES array
        this.GUESSES.push(letter);
        // Update the word hint, and guessed letter list for the user
        this.showElementByIdWithContent(this.elId + "_word", this.getGuessedfWord());
        this.showElementByIdWithContent(this.elId + "_guesses", this.GUESSES.join(''));

        // Check if our word does not contain the guessed letter
        if (this.WORD.indexOf(letter) < 0) {
            // Incorrect guess, increase our mistakes by one
            this.MISTAKES++;
            // Show next part of hangman character
            this.showElementByIdWithContent(this.elId + "_" + this.MISTAKES, null);
            // Check if its Game Over
            if (this.MISTAKES === 6) {
                this.showElementByIdWithContent(this.elId + "_end", "GAME OVER!<br/>The word was: " + this.WORD);
                this.STOPPED = true;
            }
        } else if (this.WORD.indexOf(this.getGuessedfWord()) !== -1) {
            // Victory condition
            this.showElementByIdWithContent(this.elId + "_end", "You made it!<br/>The word was: " + this.WORD);
            this.STOPPED = true;
        }
    };

    /**
     * Displays HTML element by id with the following content
     *
     * @param {string} elId     DOM ID
     * @param {HTML} content 
     */
    Hangman.prototype.showElementByIdWithContent = function (elId, content) {
        if (content !== null) {
            document.getElementById(elId).innerHTML = content;
        }
        document.getElementById(elId).style.opacity = 1;
    };

    /**
     * Hides element by class
     *
     * @param {string} elClass DOM class
     */
    Hangman.prototype.hideElementByClass = function (elClass) {
        var elements = document.getElementsByClassName(elClass), i;
        for (i = 0; i < elements.length; i++) {
            elements[i].style.opacity = 0;
        }
    };

    /**
     * The word but only with letters the user has guessed so far is visible
     */
    Hangman.prototype.getGuessedfWord = function () {
        var result = "", i;
        for (i = 0; i < this.WORD.length; i++) {
            // Word characters
            result += (this.GUESSES.indexOf(this.WORD[i]) > -1) ?
                    this.WORD[i] : "_";
        }
        return result;
    };

    // Create and return an instance of this class, its go time!
    return new Hangman('hangm');    
}());