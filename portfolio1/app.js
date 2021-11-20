gsap.registerPlugin(ScrollTrigger);

/*=====Dark Mode Theme Button=====*/
const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
});

/*=====ScrollTrigger=====*/


gsap.to('.text-test', {
    x: 850,
    duration: 8,
    scrollTrigger: {
    trigger: ".text-test",
    start: "top 90%",
    end: "top 1%",
    scrub: 1,
    toggleActions: "restart none none none",
}
})

// Step 1. Get event listener for scroll
// Step 2, when they scroll change css stylign with javascript to desired height.