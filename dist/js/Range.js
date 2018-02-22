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
