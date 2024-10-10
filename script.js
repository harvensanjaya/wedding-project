const backgroundnavEL = document.querySelector('.backgroundnav');
window.addEventListener('scroll', function() {
    if (window.scrollY >= 200) {
    backgroundnavEL.classList.add('backgroundnav-scrolled');
    } else {
    backgroundnavEL.classList.remove('backgroundnav-scrolled');
    }
});

const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('.menu-list');
const brandEL = document.querySelector('.menu .brand');
const listELs = document.querySelectorAll('.menu .list');

menuToggle.addEventListener('click', function() {
    nav.classList.toggle('slide');
});

document.getElementById("openInvitation").addEventListener("click", function() {
    var welcomeScreen = document.getElementById("welcome-screen");
    var mainContent = document.getElementById("main-content");

    welcomeScreen.classList.add("fade-out");
    setTimeout(function() {
        welcomeScreen.classList.remove("active");
        mainContent.classList.add("active", "fade-in");
        play();
    }, 1000); // Adjust the delay to match the fade-out duration
});

function padNumber(number) {
    return number < 10 ? "0" + number : number.toString();
}

function splitDigits(number) {
    let digits = padNumber(number).split("");
    return {
         tens: digits[0],
        units: digits[1]
    };
}

var countDownDate = new Date("Sept 28, 2024 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = splitDigits(Math.floor(distance / (1000 * 60 * 60 * 24)));
    var hours = splitDigits(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
    var minutes = splitDigits(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
    var seconds = splitDigits(Math.floor((distance % (1000 * 60)) / 1000));

        document.getElementById("days-tens").innerHTML = days.tens;
        document.getElementById("days-units").innerHTML = days.units;
        document.getElementById("hours-tens").innerHTML = hours.tens;
        document.getElementById("hours-units").innerHTML = hours.units;
        document.getElementById("minutes-tens").innerHTML = minutes.tens;
        document.getElementById("minutes-units").innerHTML = minutes.units;
        document.getElementById("seconds-tens").innerHTML = seconds.tens;
        document.getElementById("seconds-units").innerHTML = seconds.units;
}, 1000);

let music = document.getElementById("music");
let song = document.getElementById("song");
let ctrlicon = document.getElementById("ctrlicon");

song.onloadedmetadata = function() {
    music.max = song.duration;
    music.value = song.currentTime;
}

function playPause() {
    if(ctrlicon.classList.contains("fa-pause")){
        song.pause();
        ctrlicon.classList.remove("fa-pause");
        ctrlicon.classList.add("fa-play");
    }
    else {
        song.play();
        song.volume = 0.5;
        ctrlicon.classList.add("fa-pause");
        ctrlicon.classList.remove("fa-play");
    }
}

function play() {
    song.play();
    song.volume = 0.5;
    ctrlicon.classList.add("fa-pause");
    ctrlicon.classList.remove("fa-play");
}