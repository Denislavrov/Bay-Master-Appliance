

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


function toggleAboutBlock() {
    const block = document.querySelector('.js-about-toggle');
    const button = document.querySelector('.js-about-button');
    if (block.style.maxHeight === '0px' &&  (!button.style.background || button.style.background === 'rgb(249, 249, 249)')) {
        block.style.maxHeight = '100%';
        button.style.background = '#D8D8D8';
        block.scrollIntoView({block: 'start', behavior: "smooth"});
    } else {
        block.style.maxHeight = '0px';
        button.style.background = '#F9F9F9';
    }
}
