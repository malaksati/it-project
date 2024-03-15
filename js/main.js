const navbar = document.querySelector('.nav-fixed');
window.onscroll = () => {
    if (window.scrollY > 150) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};