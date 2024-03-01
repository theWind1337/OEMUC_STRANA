const navEl = document.querySelector('.nav');
const hamburgerEl = document.querySelector('.hamburger');
const navItemEls = document.querySelectorAll('.nav__item');

hamburgerEl.addEventListener('click', () => {
  navEl.classList.toggle('nav--open');
  hamburgerEl.classList.toggle('hamburger--open');
});

navItemEls.forEach(navItemEl => {
  navItemEl.addEventListener('click', () => {
    navEl.classList.remove('nav--open');
    hamburgerEl.classList.remove('hamburger--open');
  });
});



const counters = document.querySelectorAll(".counters span");
const container = document.querySelector(".counters");

let activated = false;

window.addEventListener("scroll", () => {
  if(
    pageYOffset > container.offsetTop - container.offsetHeight - 200
    && activated === false
  ) {
    counters.forEach(counter => {
      counter.innerText = 0;

      let count = 0;

      function updateCount() {
        const target = parseInt(counter.dataset.count);

        if(count < target) {
          count++;

          counter.innerText = count;

          setTimeout(updateCount, 10);
        } else {
          counter.innerText = target;
        }
      }
      updateCount();

      activated = true;
    });
  } else if(
    pageYOffset < container.offsetTop - container.offsetHeight - 500
    || pageYOffset === 0
    && activated === true
  ) {
    counters.forEach(counter => {
      counter.innerText = 0;
    });
    activated = false;
  }
});


/*open nov navbar*/


/*close nov navbar*/