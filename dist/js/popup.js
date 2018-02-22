var modal = document.getElementById("modal-window");
var button = document.body.querySelectorAll(".our-work__look");
var closeButton = document.getElementsByClassName("close")[0];



button.forEach(function(button) {



button.onclick = function () {
    /*modal.style.display = "block";*/
    document.body.querySelector(".our-work__popup-background").classList.add("popup-background-active");
/*var showPopup = document.body.querySelector(".our-work__popup-background");
    showPopup.forEach(function(showPopup) {
        showPopup.classList.add("popup-background-active");
    });
    console.log("buba");*/
};
});


closeButton.onclick = function () {
    /*modal.style.display = "none";*/
    modal.classList.remove("popup-background-active");
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

