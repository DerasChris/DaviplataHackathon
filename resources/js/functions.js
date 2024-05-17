//require('./bootstrap');
const menu = document.querySelector("#menu");
const menuBtn = document.querySelectorAll(".menu-btn");

menuBtn.forEach((btn) => {
    btn.addEventListener("click", function () {
        menu.classList.toggle("visible");
   }) 
});

document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !menuBtn[0].contains(e.target)) {
        menu.classList.remove("visible");
    }
})