const sr=ScrollReveal({
    origin:'top',
    distance:'85px',
    duration:2500,
    reset:true
})

sr.reveal('.containre',{ delay:350, origin:'bottom' })
ScrollReveal().reveal('.first-pic', {
distance: '0px',
opacity: 0,
 duration: 1000,
});
ScrollReveal().reveal('.second-pic', {
distance: '0px',
opacity: 0,
 duration: 1700,
});
ScrollReveal().reveal('.third-pic', {
distance: '0px',
opacity: 0,
 duration: 1500,
});
ScrollReveal().reveal('.fourth-pic', {
distance: '0px',
opacity: 0,
 duration: 1700,
});

sr.reveal('.word-sec',{ delay:2000, origin:'bottom' })
sr.reveal('.burger-icon',{ delay:350, origin:'top' })
sr.reveal('.heading-txt',{ delay:350, origin:'top' })
sr.reveal('.market', { delay: 350, origin: 'top' });
sr.reveal('.contact-us', { delay: 350, origin: 'top' });
ScrollReveal().reveal('.burger-icon');
let section_counter = document.querySelector('#section_counter');
let counters = document.querySelectorAll('.counter-item .counter');

// Scroll Animation

let CounterObserver = new IntersectionObserver(
  (entries, observer) => {
    let [entry] = entries;
    if (!entry.isIntersecting) return;

    let speed = 200;
    counters.forEach((counter, index) => {
      function UpdateCounter() {
        const targetNumber = +counter.dataset.target;
        const initialNumber = +counter.innerText;
        const incPerCount = targetNumber / speed;
        if (initialNumber < targetNumber) {
          counter.innerText = Math.ceil(initialNumber + incPerCount);
          setTimeout(UpdateCounter, 40);
        }
        else {
          counter.innerText = targetNumber;
        }
      }
      UpdateCounter();

      if (counter.parentElement.style.animation) {
        counter.parentElement.style.animation = '';
      } else {
        counter.parentElement.style.animation = `slide-up 0.3s ease forwards ${
          index / counters.length + 0.5
        }s`;
      }
    });
    observer.unobserve(section_counter);
  },
  {
    root: null,
    threshold: window.innerWidth > 768 ? 0.4 : 0.3,
  }
);

CounterObserver.observe(section_counter);