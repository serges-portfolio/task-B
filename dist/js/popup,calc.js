var modal = document.getElementById("modal-window");
var button = document.body.querySelectorAll(".show-popup");
var closeButton = document.getElementsByClassName("close")[0];



button.forEach(function(button) {



button.onclick = function () {

    document.body.querySelector(".our-work__popup-background").classList.add("popup-background-active");

    };
});


closeButton.onclick = function () {
    modal.classList.remove("popup-background-active");
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

/*______форма калькулятора_____*/

function myFunction() {
    var n = document.getElementById("rangeNumber").value;
    document.getElementById("range-value").innerHTML = n;
    n = n * 100 / 300;
    document.getElementById("rangeNumber").style.background =
        "-webkit-linear-gradient(left,#d71a41 0%,#d71a41 " + n + "%,#f0f5f8 " + n + "%, #f0f5f8 100%)";
}

function Selected() {

    if (document.getElementById("package1").checked === true) {
        document.getElementById("box1").style.display = "block";
    }
    else {
        document.getElementById("box1").style.display = "none";
    }
}
