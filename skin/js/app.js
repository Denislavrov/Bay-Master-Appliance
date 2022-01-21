

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


function toggleForm() {
    const div = document.querySelector('.js-form-hideWrap');
    const check = document.querySelector('.js-check-more');
    const checkMob = document.querySelector('.js-check-more-mobile');
    if (check.checked || checkMob.checked) {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
}
