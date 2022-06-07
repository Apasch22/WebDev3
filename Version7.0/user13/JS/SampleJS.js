function descriptionV() {
    var textV = 'Valorant is a tactical shooting game involving two teams with 5 players in each team. Every player can sign in and play remotely from anywhere in the world. Every game has 25 rounds and the team that wins 13 of them first wins the game. Players can choose their in-game characters called agents at the start of the game.'
    document.getElementById("VALORANT").innerHTML = textV.replace("VALORANT");
}

function descriptionL() {
    var textL = 'League of Legends is a team-based strategy game where two teams of five powerful champions face off to destroy the other&#39s base. Choose from over 140 champions to make epic plays, secure kills, and take down towers as you battle your way to victory.'
    document.getElementById("LoL").innerHTML = textL.replace("LoL");
}

function descriptionF() {
    var textF = 'Fortnite is a survival game where 100 players fight against each other in player versus player combat to be the last one standing. It is a fast-paced, action-packed game, not unlike The Hunger Games, where strategic thinking is a must in order to survive.'
    document.getElementById("FORTNITE").innerHTML = textF.replace("FORTNITE");
}

function descriptionH() {
    var textH = 'Halo Infinite is a 2021 first-person shooter game developed by 343 Industries and published by Xbox Game Studios. It is the sixth mainline entry in the Halo series, and the third in the "Reclaimer Saga" following Halo 5: Guardians (2015).'
    document.getElementById("HALO").innerHTML = textH.replace("HALO");
}

function descriptionC() {
    var textC = 'Counter-Strike: Global Offensive (CS:GO) is a round-based, 5v5 tactical FPS with an Attackers vs. Defenders setup and no respawns, meaning if a player is eliminated they will not respawn until the next round.'
    document.getElementById("CSGO").innerHTML = textC.replace("CSGO");
}

function nameV() {
    var V = 'Valorant'
    document.getElementById("VALORANT").innerHTML = V.replace("VALORANT");
}

function nameL() {
    var L = 'League of Legends'
    document.getElementById("LoL").innerHTML = L.replace("LoL");
}

function nameF() {
    var F = 'Fortnite'
    document.getElementById("FORTNITE").innerHTML = F.replace("FORTNITE");
}

function nameH() {
    var H = 'Halo'
    document.getElementById("HALO").innerHTML = H.replace("HALO");
}

function nameC() {
    var C = 'Counter-Strike: Global Offensive'
    document.getElementById("CSGO").innerHTML = C.replace("CSGO");
}

function time() {
    document.getElementById("DATE").innerHTML = Date();
}

function showMsg() {
    var userInput = document.getElementById('userInput').value;
    document.getElementById('userMsg').innerHTML = userInput;
}

function color(color) {
    document.getElementById('userInput').style.background = color;
}