// NAVBAR

const menuHamburger = document.querySelector('.navbar__burger');
const navlinks = document.querySelector('.navbar__link');

menuHamburger.addEventListener('click', () => {
    navlinks.classList.toggle('mobile__menu')
});

window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    navbar.classList.toggle('sticky', window.scrollY > 0)
});

// WORLD HIDE

const worlds = document.querySelectorAll('.world');

worlds.forEach(world => {
    world.addEventListener('click', () => {
        world.classList.toggle('openw');
    });
});

// HOYO HIDE 

const hoyos = document.querySelectorAll('.hoyoverse');

hoyos.forEach(hoyo => {
    hoyo.addEventListener('click', () => {
        hoyo.classList.toggle('open');
    });
});
