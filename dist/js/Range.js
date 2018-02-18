function myFunction() {
    var n = document.getElementById("rangeNumber").value;
    document.getElementById("range-value").innerHTML = n;
    n = n * 100 / 300;
    document.getElementById("rangeNumber").style.background =
        "-webkit-linear-gradient(left,#d71a41 0%,#d71a41 " + n + "%,#f0f5f8 " + n + "%, #f0f5f8 100%)";
}

/*function Selected() {
    var pack1 = document.getElementById("package1");
    if (pack1.checked) {
        /!*document.querySelector(".box1").classList.style.display = "block";*!/
        console.log("BUBA");
    }
    /!*else {
        document.querySelector(".box1").classList.style.display = "none";
    }*!/
    /!*else if (document.getElementById("package2").onclick) {
        document.querySelector(".box2").classList.style.display = "block";
    }*!/
}*/
function Selected() {

    if (document.getElementById("package1").checked === true) {
        document.getElementById("box1").style.display = "block";
        console.log("BUBA");
    }
    else {
        document.getElementById("box1").style.display = "none";
    }
    if (document.getElementById("package2").checked === true) {
        document.getElementById("box2").style.display = "block";
        console.log("BUBA");
    }
    else {
        document.getElementById("box2").style.display = "none";
    }
}