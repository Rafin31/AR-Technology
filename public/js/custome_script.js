let nav = document.querySelector(".navbar");

window.onscroll = function() {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("header-scrolled")
    } else {
        nav.classList.remove("header-scrolled")
    }
}


let nav_bar = document.querySelectorAll('.nav-link');
let collaps = document.querySelector('.navbar-collapse.collapse');


nav_bar.forEach((a) => {
    a.addEventListener("click", () => {
        collaps.classList.remove("show");
    })

})