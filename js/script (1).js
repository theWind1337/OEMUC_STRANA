const menBtn = document.getElementById('menu-btn');
const navbar = document.getElementById('mobilen-navbar');
const menu = document.querySelector('.mob-menu');

const offset = 50;

menBtn.addEventListener('click', () => {
  menu.classList.toggle('menu-open');
});

window.addEventListener("scroll", () => {
  if (pageYOffset > offset) {
    navbar.classList.add('navbar-active');
  } else {
    navbar.classList.remove('navbar-active');
  }
});



let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if(pos>100){
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#fdc735 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;





const btn = document.querySelector('.btn-video');
const videoContainer = document.querySelector('.video-container');
const close = document.querySelector('.close');

btn.addEventListener('click',()=>{
  videoContainer.classList.add('show');
})


close.addEventListener("click", () => {
  videoContainer.classList.remove("show");
  const video = document.getElementById("video");
  console.log(video);

  var iframe = document.querySelector("iframe");
  var temp = iframe.src;
  iframe.src = temp;
});








const mainLinks = document.querySelectorAll(".main-link");
const mainLinks_a = document.querySelectorAll(".main-link a");
const containerNavbar = document.querySelectorAll(".container-navbar");
let active=mainLinks[0];
mainLinks.forEach(function (el) {
  el.addEventListener("click", function () {
    mainLinks.forEach((el) => {
      el.classList.remove("active");
    });

    el.classList.add("active");
    active = el;
  });
});
let url = window.location.pathname;

mainLinks_a.forEach((el) => {
  if (url.slice(1) == el.getAttribute("href")) {
    active = el;
  }
});

mainLinks.forEach((el) => {
  el.classList.remove("active");
});
active.closest("li").classList.add("active");



// var play = document.querySelector('.play');
// var pause = document.querySelector('.pause');
// var btn = document.querySelector('.app');

// btn.addEventListener('click', () => {
//     if(play.classList.contains('active')){
//         play.classList.remove('active')
//         pause.classList.add('active')
//     }
//     else{
//         pause.classList.remove('active')
//         play.classList.add('active')

//     }
// })

