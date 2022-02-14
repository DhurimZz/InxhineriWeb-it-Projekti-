var toggleBtn = document.querySelector('.js-toggle-nav')
var sidenavBg = document.querySelector('.js-nav-bg')
var sidenav = document.querySelector('.js-sidenav')


toggleBtn.addEventListener('click', () => {
    sidenav.classList.toggle('shown');
});

sidenavBg.addEventListener('click', () => {
    sidenav.classList.toggle('shown');
});
