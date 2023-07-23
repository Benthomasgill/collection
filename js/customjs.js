// Show/Hide Search bar in the nav

let revealFunction = () => {
    const search = document.querySelector(".search-header");
    if (search.classList.contains('active')) {
        search.classList.remove("active");
    } else {
        search.classList.add("active");
    };
};

//Show/Hide Mobile nav

let revealMenuFunction = () => {
    const menu = document.querySelector(".mobile-nav");
    const navbutton = document.querySelector(".toggle-nav");
    if (menu.classList.contains('active')) {
        menu.classList.remove("active");
        navbutton.classList.remove("active-menu");
        console.log("Click")
    } else {
        menu.classList.add("active");
        navbutton.classList.add("active-menu");
    };
};


// var element = document.getElementById("star");
// var rotation = 0;

// window.addEventListener("scroll", function() {
//     rotation += 2;
//     element.style.transform = "rotate(" + rotation + "deg)";
// });

// Text Banner - Homepage animation

const text = document.getElementById("text");
text.style.marginLeft = "100%";

setInterval(function() {
text.style.marginLeft = (parseInt(text.style.marginLeft) - 1) + "%";
if (parseInt(text.style.marginLeft) <= -1000) {
    text.style.marginLeft = "100%";
}
}, 80);