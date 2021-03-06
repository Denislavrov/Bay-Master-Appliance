

function toggleMenu() {
    const menu = document.querySelector('.js-mobile-menu');
    const bg = document.querySelector('.js-mobile-menu-bg');
    if (bg.style.display === 'block' && menu.style.transform === 'translateY(0px)') {
        bg.style.display = 'none';
        menu.style.transform = 'translateY(-1000px)';
    } else {
        bg.style.display = 'block';
        menu.style.transform = 'translateY(0px)';
    }
}

window.onload = function() {
    const menu = document.querySelectorAll('.js-header-mob-menu');
    const buttons = document.querySelectorAll('.js-menuHandle');
    buttons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            for (let i = 0; i < menu.length; i++) {
                if (menu[i].dataset.attr === e.target.dataset.attr) {
                    if (menu[i].classList.contains('_openMenu')) {
                        menu[i].classList.remove('_openMenu');
                    } else {
                        menu[i].classList.add('_openMenu');
                    }
                }
            }
        })
    })

    const menuFooter = document.querySelectorAll('.js-footer-mob-menu');
    const buttonsFooter = document.querySelectorAll('.js-mobileHandle-footer');

    buttonsFooter.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            for (let i = 0; i < menuFooter.length; i++) {
                if (menuFooter[i].dataset.attr === e.target.dataset.attr) {
                    if (menuFooter[i].classList.contains('_openFooterMenu')) {
                        menuFooter[i].classList.remove('_openFooterMenu');
                    } else {
                        menuFooter[i].classList.add('_openFooterMenu');
                    }
                }
            }
        })
    })

    modalHandler();
}

function modalHandler() {
    const modal = document.querySelector('.js-modal-wrap');
    const modalBg = document.querySelector('.js-modal-bg');
    const close = document.querySelector('.js-modal-close');

    modalBg.addEventListener('click', () => modalControl());
    close.addEventListener('click', () => modalControl());

    function modalControl() {
        if (modal.classList.contains('_open')) {
            modal.classList.remove('_open');
        } else {
            modal.classList.add('_open');
        }
    }
}

function toggleForm() {
    const form = document.querySelector('.js-form-block');
    const div = document.querySelector('.js-form-hideWrap');
    const check = document.querySelector('.js-check-more');
    const checkMob = document.querySelector('.js-check-more-mobile');
    if (check.checked || checkMob.checked) {
        div.style.display = 'block';
        form.classList.add('_longForm');
    } else {
        div.style.display = 'none';
        form.classList.remove('_longForm');
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

const swiperHome = new Swiper('.js-swiper-about', {
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.about-slider__next',
        prevEl: '.about-slider__prev',
    },
});

const swiperTeam = new Swiper('.js-swiper-team', {
    autoplay: {
        delay: 5000,
    },
    loop: true,
    grabCursor: true,
    slidesPerView: 2,
    roundLengths: true,
    spaceBetween: 10,
    resizeObserver: true,
    navigation: {
        nextEl: '.team-slider__next',
        prevEl: '.team-slider__prev',
    },
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        769: {
            slidesPerView: 4,
            spaceBetween: 35,
        },
        1060: {
            slidesPerView: 6,
            spaceBetween: 17
        }
    }
});
