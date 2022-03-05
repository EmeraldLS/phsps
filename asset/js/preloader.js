var preloader = document.querySelector(".preloader");
var body = document.querySelector("body")
function fadeOut(){
  preloader.classList.add("hide");
  body.style.pointerEvents = "all"
}