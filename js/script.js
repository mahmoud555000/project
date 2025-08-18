var countDownDate = new Date("dec 15, 2025 23:27:00").getTime();

var x = setInterval(function() {
    var counter = document.getElementById("demo");
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    counter.innerHTML = days + " days " + hours + " hours " +
        minutes + " minutes " + seconds + " seconds ";

    if (distance < 0) {
        clearInterval(x);
        counter.innerHTML = "you are late!!!";
    }
}, 1000);


const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");

var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
    keyboard: false
});

win.addEventListener('click', function() {
    loader.style.display = 'block';

    // setTimeout(function() {
    //     myModal.show();
    // }, 3000);
});


