





document.addEventListener("DOMContentLoaded", function() {
    let burgerMenuBtn = document.querySelector("#burger-menu-btn");
    let burgerMenu = document.querySelector("#burger-nav");

    if (burgerMenuBtn && burgerMenu) {
        burgerMenuBtn.addEventListener("click", function() {
            burgerMenu.classList.toggle("activeNavBar");
        });
    }


})

