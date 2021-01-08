

window.onscroll = function() {myDisplay()};
window.onresize = function() {myDisplay()};
window.onload = function() {resize()}
window.onresize = function() {resize()}
        
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myDisplay() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    navbar.classList.remove("relative");
  } else {
    navbar.classList.remove("sticky");
    navbar.classList.add("relative");
  }
}

function resize() {
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);	
}

