document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const laptopScreenMediaQuery = window.matchMedia('(min-width: 992px)');

    const startAnimHome = '-100 center';

    const createScrollAnimationFrom = (selector, trigger, start, end, scrub, animationProps) => {
        gsap.from(selector, {
            scrollTrigger: {
                trigger: trigger,
                start: start,
                end: end,
                scrub: scrub,
            },
            ...animationProps,
        });
    }

    const createScrollAnimationTo = (selector, trigger, start, end, scrub, animationProps) => {
        gsap.from(selector, {
            scrollTrigger: {
                trigger: trigger,
                start: start,
                end: end,
                scrub: scrub,
            },
            ...animationProps,
        });
    }


    if (laptopScreenMediaQuery.matches) {
        createScrollAnimationFrom('.adv__item', '.adv', startAnimHome, '+=40%', 1, {
            opacity: 0,
            x: -150,
            stagger: 1,
        });

        createScrollAnimationFrom('.emprowe__info', '.emprowe', startAnimHome, '+=40%', 1, {
            opacity: 0,
            y: -150,
        });

        createScrollAnimationFrom('.emprowe__mockup', '.emprowe', startAnimHome, '+=40%', 1, {
            opacity: 0,
            y: 100,
            stagger: 1,
            rotate: -40,
        });

        createScrollAnimationFrom('.why h2', '.why', startAnimHome, '+=40%', 1, {
            opacity: 0,
            rotate: -40,
        });

        createScrollAnimationFrom('.why__item', '.why', startAnimHome, '+=40%', 1, {
            y: 100,
            opacity: 0,
            scale: 0.5,
            stagger: 1,
        });

        createScrollAnimationFrom('.trade h2', '.trade', startAnimHome, '+=40%', 1, {
            y: 100,
            opacity: 0,
            scale: 0.5,
        });

        createScrollAnimationFrom('.trade__item', '.trade', startAnimHome, '+=40%', 1, {
            x: -150,
            opacity: 0,
            stagger: 1,
        });

        createScrollAnimationFrom('.trade__laptop', '.trade', startAnimHome, '+=40%', 1, {
            rotate: 120,
            opacity: 0,
            scale: 0,
            x: 2000,
        });

        createScrollAnimationFrom('.journey__right svg path', '.journey', startAnimHome, '+=30%', 1, {
            y: -150,
            opacity: 0,
            stagger: 1,
        });


        createScrollAnimationFrom('.journey__left', '.journey', startAnimHome, '+=40%', 1, {
            opacity: 0,
            x: -300,
        });

        createScrollAnimationFrom('.journey__right p', '.journey', startAnimHome, '+=40%', 1, {
            opacity: 0,
            x: 200,
        });
    }

});




