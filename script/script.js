window.onscroll = function () {
  myFunction();
};

var navbar = document.querySelector("nav");

function myFunction() {
  if (window.pageYOffset >= 60) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
