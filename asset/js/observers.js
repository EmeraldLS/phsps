var intro = document.querySelector(".intro")
var contactImg = document.querySelector(".contact-img")
var headers = document.querySelectorAll(".phsps-h2");
var paras = document.querySelectorAll(".phsps-p");
var imgs = document.querySelectorAll(".img-fluid")
function fadeIn(){
    var fadeInOptions = {
        root:null,
        threshold:0.5
    }
    const fadeInObserver = new IntersectionObserver((entries, fadeIn) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.classList.add("fadeIn")
        }else{
          entry.target.classList.remove("fadeIn")
        }
      })
    }, fadeInOptions)
    fadeInObserver.observe(intro)
  }
  
fadeIn()

function fromBottom(){
  var fromTopOptions = {
    root:null,
    threshold:0.7
  };
  const fromBottomObserver = new IntersectionObserver((entries, fromTopOptions) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("fromBottom")
      }else{
        entry.target.classList.remove("fromBottom")
      }
    })
  }, fromTopOptions)
  headers.forEach(header => {
    fromBottomObserver.observe(header)
  })
}

fromBottom()

function fromLeft(){
  var fromLeftOptions = {
    root:null,
    threshold:0.5
  }
  const fromLeftObserver = new IntersectionObserver((entries, fromLeftObserver) => {
    entries.forEach((entry) => {
      if(entry.isIntersecting){
        entry.target.classList.add("fromLeft")
      }else{
        entry.target.classList.remove("fromLeft")
      }
    })
  }, fromLeftOptions)

  fromLeftObserver.observe(contactImg)
  paras.forEach(para => {
    fromLeftObserver.observe(para)
  })
}

fromLeft()


function fromRight(){
  var fromRightOptions = {
    root:null,
    threshold: 0.7
  }
  const fromRightObserver = new IntersectionObserver((entries, fromRightObserver) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("fromRight")
      }else{
        entry.target.classList.remove("fromRight")
      }
    })
  }, fromRightOptions)
  
  imgs.forEach(img => {
    fromRightObserver.observe(img)
  })
  
}

fromRight()