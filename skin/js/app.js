

function toggleMenu() {
    const menu = document.querySelector('.js-mobile-menu');
    const bg = document.querySelector('.js-mobile-menu-bg');
    if (bg.style.display === 'block' && menu.style.transform === 'translateY(0px)') {
        bg.style.display = 'none';
        menu.style.transform = 'translateY(-600px)';
    } else {
        bg.style.display = 'block';
        menu.style.transform = 'translateY(0px)';
    }
}
