
const sr=ScrollReveal({
    origin:'top',
    distance:'85px',
    duration:2500,
    reset:true
})
sr.reveal('.heading-txt', {
    delay: 500,
    origin: 'top',
    distance: '100px',
    duration: 1000 // Adjust the duration for a smoother or faster animation
});

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
sr.reveal('.word-sec',{ delay:200, origin:'bottom' })
sr.reveal('.burger-icon',{ delay:350, origin:'top' })
// Configure the reveal animation to go from 100px to 10px with a smooth animation
