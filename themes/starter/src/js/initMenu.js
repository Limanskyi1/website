document.addEventListener('DOMContentLoaded', () => {
    const burgerButton = document.querySelector('.btn-burger');
    const headerMenu = document.querySelector('.header__menu');
    const menuCloser = document.querySelector('.menu-closer');

    burgerButton.addEventListener('click', () => {
        headerMenu.style.left = '0';
        document.body.style.overflowY = 'hidden';
    });

    menuCloser.addEventListener('click', () => {
        headerMenu.style.left = '-100vw';
        document.body.style.overflowY = 'scroll';
    });
});


