document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const laptopScreen = window.matchMedia('(min-width: 992px)');
    
    const startAnim = '-100 center';

    function createAnimationAbout(selector, trigger, start, end, scrub, animationProps) {
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

    createAnimationAbout('.secure h2', '.secure',startAnim, '+=50%', 1, {
        opacity: 0,
        y: -100,
        stagger: 0.25,
    });

    createAnimationAbout('.secure__item', '.secure',startAnim, '+=50%', 1, {
        opacity: 0,
        y: 300,
        stagger: 0.25,
        scale: 0.5,
    });

    createAnimationAbout('.support__info', '.support',startAnim, '+=50%', 1, {
        opacity: 0,
        x: -300,
        scale: 0.8,
    });

    createAnimationAbout('.support-anim', '.support',startAnim, '+=50%', 1, {
        opacity: 0,
        y: 100,
        rotate: -30,
        stagger: 0.25,
    });
    createAnimationAbout('.part h2', '.part',startAnim, '+=50%', 1, {
        opacity: 0,
        y: -100,
    });
    createAnimationAbout('.part__item .number span', '.part',startAnim, '+=50%', 1, {
        opacity: 0,
        y: -100,
        stagger: 0.25,
    });

    createAnimationAbout('.part__item p', '.part',startAnim, '+=50%', 1, {
        opacity: 0,
        y: 100,
        stagger: 0.25,
    });


    createAnimationAbout('.partnership__svg .line-1', '.partnership',startAnim, '+=50%', 1, {
        opacity: 0,
        y: 100,
    });
    createAnimationAbout('.partnership__svg .line-2', '.partnership',startAnim, '+=50%', 1, {
        opacity: 0,
        x: -100,
        y: -100,
        stagger: 0.25,
    });
    createAnimationAbout('.partnership__svg .line-3', '.partnership',startAnim, '+=50%', 1, {
        opacity: 0,
        y:  100,
        stagger: 0.25,
    });
    createAnimationAbout('.partnership__svg .line-4', '.partnership',startAnim, '+=50%', 1, {
        opacity: 0,
        x: 100,
        stagger: 0.25,
    });

    createAnimationAbout('.partnership__info', '.partnership',startAnim, '+=50%', 1, {
        opacity: 0,
        x: 200,
        scale: 0.7,
    });

    



});








