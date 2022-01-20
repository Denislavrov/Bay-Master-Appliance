<?php include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/header.tpl.php") ?>
<div class="main-container">
    <header class="main-header">
        <div class="layout-main">
            <div class="header-block">
                <div class="header-content">
                    <a href="#" class="header-link">
                        <img src="/skin/images/Group%20579.svg" alt="logo"/>
                    </a>
                    <a href="tel:4084844353" class="header-phone">
                        <svg style="margin-right: 10px" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.5" cy="9.5" r="9.5" fill="#333333"/>
                            <path d="M14.3788 12.4611L12.1721 10.4547C12.0678 10.3599 11.9307 10.3094 11.7898 10.3137C11.649 10.3181 11.5153 10.377 11.417 10.4781L10.118 11.8141C9.80527 11.7543 9.17664 11.5584 8.52955 10.9129C7.88247 10.2653 7.6865 9.63503 7.62841 9.32452L8.96329 8.02492C9.06449 7.92673 9.12351 7.79302 9.12787 7.65209C9.13223 7.51115 9.08158 7.37405 8.98664 7.2698L6.98078 5.06363C6.8858 4.95905 6.7538 4.89562 6.61281 4.8868C6.47181 4.87798 6.33293 4.92448 6.22567 5.0164L5.04767 6.02666C4.95381 6.12085 4.89779 6.24622 4.89024 6.37898C4.8821 6.51469 4.72684 9.72949 7.21964 12.2234C9.39432 14.3975 12.1184 14.5566 12.8686 14.5566C12.9783 14.5566 13.0456 14.5533 13.0635 14.5522C13.1962 14.5448 13.3215 14.4885 13.4153 14.3943L14.425 13.2157C14.5173 13.1088 14.5641 12.97 14.5555 12.829C14.5469 12.6881 14.4835 12.556 14.3788 12.4611Z" fill="white"/>
                        </svg>
                        (408) 484-4353
                    </a>
                    <button class="header-button">Book online</button>
                </div>

                <div class="header-menu__wrap">
                    <nav class="header-menu__list">
                        <li class="header-menu__el _hasSubmenu">
                            <a href="/" class="header-menu__link _action">
                                Services
                                <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 8L0.669875 0.5L9.33013 0.500001L5 8Z" fill="#333333"/>
                                </svg>
                            </a>
                            <ul class="header-submenu">
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Refrigerators</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Ovens | Microwave</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Ranges | Cooktops</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Dishwashers</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Washers</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Dryers</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Stackable</a>
                                </li>
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Garbage disposals</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-menu__el _hasSubmenu">
                            <a href="/" class="header-menu__link">
                                About us
                                <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 8L0.669875 0.5L9.33013 0.500001L5 8Z" fill="#333333"/>
                                </svg>
                            </a>
                            <ul class="header-submenu _one_el">
                                <li class="header-submenu__el">
                                    <a href="/" class="header-submenu__link">Reviews</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-menu__el">
                            <a href="/" class="header-menu__link">Contacts</a>
                        </li>
                        <li class="header-menu__el">
                            <a href="/" class="header-menu__link">Areas</a>
                        </li>
                    </nav>
                    <div class="mobile-menu-button" onclick="toggleMenu()">
                        <span class="mobile-button-line"></span>
                        <span class="mobile-button-line"></span>
                        <span class="mobile-button-line"></span>
                    </div>
                    <div class="header-mobile-menu js-mobile-menu">
                        <div class="header-mobile-top-block">
                            <img src="/skin/images/Group%20965.svg" alt="logo1" class="header-mobile-menu-logo"/>
                            <svg style="cursor: pointer" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="toggleMenu()">
                                <path d="M14.9956 30.0013C13.0258 30.0033 11.0749 29.6167 9.2547 28.8635C7.43446 28.1104 5.78058 27.0056 4.38772 25.6123C2.99485 24.2191 1.89036 22.5647 1.13746 20.7439C0.384561 18.9231 -0.00196525 16.9717 7.51352e-06 15.0013V14.7013C0.0600024 11.7604 0.98266 8.90203 2.65331 6.48135C4.32396 4.06068 6.66893 2.18447 9.39678 1.08591C12.1246 -0.0126471 15.1151 -0.285113 17.9965 0.302377C20.8779 0.889867 23.5231 2.31141 25.6035 4.39032C27.7024 6.48814 29.132 9.16167 29.7114 12.0725C30.2907 14.9834 29.9937 18.0008 28.858 20.7428C27.7223 23.4847 25.7989 25.8281 23.3313 27.4762C20.8637 29.1243 17.9627 30.0031 14.9956 30.0013ZM14.9956 17.1163L18.8795 21.0013L20.9938 18.8863L17.11 15.0013L20.9938 11.1163L18.8795 9.00132L14.9956 12.8863L11.1117 9.00132L8.99736 11.1163L12.8812 15.0013L8.99736 18.8863L11.1117 21.0013L14.9956 17.1178V17.1163Z" fill="#A63A42"/>
                            </svg>
                        </div>
                        <ul class="header-mobile-menu-list">
                            <li class="header-mobile-menu-el hasMobileSubmenu">
                                <a href="#" class="header-mobile-menu-link">
                                    Services
                                    <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 8L0.669875 0.5L9.33013 0.500001L5 8Z" fill="#333333"/>
                                    </svg>
                                </a>
                                <ul class="header-mobile-submenu">
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Refrigerators</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Washers</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Ovens | Microwaves</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Dryers</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Ranges | Cooktops</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Stackable</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Dishwashers</a>
                                    </li>
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Garbage disposals</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-mobile-menu-el hasMobileSubmenu">
                                <a href="#" class="header-mobile-menu-link">
                                    About us
                                    <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 8L0.669875 0.5L9.33013 0.500001L5 8Z" fill="#333333"/>
                                    </svg>
                                </a>
                                <ul class="header-mobile-submenu">
                                    <li class="header-mobile-submenu_el">
                                        <a href="#" class="header-mobile-submenu-link">Reviews</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-mobile-menu-el hasMobileSubmenu">
                                <a href="#" class="header-mobile-menu-link">Contacts</a>
                            </li>
                            <li class="header-mobile-menu-el hasMobileSubmenu">
                                <a href="#" class="header-mobile-menu-link">Area</a>
                            </li>
                        </ul>
                        <div class="header-mobile-menu-bottom">
                            <button class="header-mobile-menu-bottom-button">Request service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile-menu-bg js-mobile-menu-bg" onclick="toggleMenu()"></div>
    </header>


<main>

