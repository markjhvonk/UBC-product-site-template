var burgerBtn = document.getElementById("burgerBtn");
var closeBtn = document.getElementById("closeBtn");
var mobileMenu = document.getElementById("mobileMenu");
var menuState = false;

burgerBtn.addEventListener('click', toggleMenu);
closeBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
    if(!menuState) {
        mobileMenu.style.display = "flex";
        menuState = true;
    } else {
        mobileMenu.style.display = "none";
        menuState = false;
    }
}
