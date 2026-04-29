let hamburger_menu = document.querySelector("#hamburger-menu");
let nav_visible = document.querySelector(".nav-visible");
let close = document.querySelector(".close");

// hamburger menu
hamburger_menu.addEventListener("click", () => {
    nav_visible.classList.add("visible");
    console.log("true");
});

// button close sidebar
close.addEventListener("click", () => {
    nav_visible.classList.remove("visible");
    nav_visible.classList.add("invisible");
    console.log("true");
});

// klik diluar sidebar
document.addEventListener("click", (e) => {
    if (!nav_visible.contains(e.target) && !hamburger_menu.contains(e.target)) {
        nav_visible.classList.remove("visible");
        nav_visible.classList.add("invisible");
    }
});
