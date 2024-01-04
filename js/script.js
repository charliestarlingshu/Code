
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("topics");
var sticky = navbar.offsetTop;
var main=document.getElementById("main");
function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.classList.add("sticky")
    main.classList.add("fillSpace");
  } else {
    navbar.classList.remove("sticky")
    main.classList.remove("fillSpace");
  }
}


