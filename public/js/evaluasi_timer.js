var currentTime = new Date();
var countDownDate = new Date(currentTime.getTime() + 30 * 60000);

var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = minutes + ": " + seconds + " ";

    if (distance < 0) {
        clearInterval(x);
        let form = document.getElementById("form");
        form.submit();
    }
}, 1000);
