document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const laptopScreen = window.matchMedia('(min-width: 992px)');

    
        const gHeader= gsap.timeline();

        gHeader
            .from(".header", {
                scrollTrigger: {
                    trigger: ".header",
                    start: "-250 0",
                    scrub: 5,
                },
                height: '117px',
            })
});
