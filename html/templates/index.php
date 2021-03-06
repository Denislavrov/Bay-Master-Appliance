<?php
$PAGE['meta_title'] = "Home";
$page = 'index';
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/header.tpl.php");
?>

<div class="service-main">
    <div class="layout-main">
        <div class="service-block">
            <div class="service-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
            <div class="service-text">
                We have experience in the repair of all types and brands of appliances and ready
                to share it with you. We have experience in the repair.
            </div>
            <div class="service-button-block">
                <button class="service-button">Request service</button>
                <a href="#" class="service-link">Read more</a>
            </div>
        </div>
    </div>
</div>

<section class="service-repair">
    <div class="layout-main">
        <div class="service-repair-title">We repair</div>
        <div class="service-repair-text">We have experience in the repair of all types and brands of appliances and ready to share it with you.</div>
        <div class="repair-wrap">
            <?php for ($i = 0; $i < 8; $i++) {?>
                <div class="repair-item">
                    <div class="repair-item-title">Refrigerators</div>
                    <div class="repair-item-img-block">
                        <img src="/skin/images/pngegg-2%202.png" alt="img" class="repair-item-img">
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="services-how-work">
    <div class="layout-main">
        <div class="services-how-work-top">
            <div class="services-how-work-title">How we work</div>
            <div class="services-how-work-text">The main steps we follow in working with our clients</div>
        </div>

        <div class="services-how-work-options">
            <div class="services-how-work-option">
                <div class="services-how-work-img-block">
                    <svg width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.8988 0.53876L10.625 17.8113C10.5089 17.9279 10.3709 18.0204 10.2189 18.0835C10.0669 18.1466 9.90397 18.1791 9.7394 18.1791C9.57484 18.1791 9.41189 18.1466 9.25991 18.0835C9.10793 18.0204 8.96992 17.9279 8.85378 17.8113L2.17378 11.125C2.05764 11.0084 1.91963 10.9159 1.76765 10.8528C1.61567 10.7896 1.45272 10.7571 1.28815 10.7571C1.12359 10.7571 0.96064 10.7896 0.808662 10.8528C0.656684 10.9159 0.518666 11.0084 0.402529 11.125C0.285934 11.2411 0.193418 11.3792 0.130291 11.5311C0.0671638 11.6831 0.034668 11.8461 0.034668 12.0106C0.034668 12.1752 0.0671638 12.3382 0.130291 12.4901C0.193418 12.6421 0.285934 12.7801 0.402529 12.8963L7.08503 19.5775C7.78996 20.2811 8.74528 20.6763 9.74128 20.6763C10.7373 20.6763 11.6926 20.2811 12.3975 19.5775L29.67 2.30876C29.7864 2.19265 29.8788 2.05471 29.9418 1.90284C30.0048 1.75098 30.0373 1.58818 30.0373 1.42376C30.0373 1.25934 30.0048 1.09654 29.9418 0.944676C29.8788 0.792813 29.7864 0.654875 29.67 0.53876C29.5539 0.422165 29.4159 0.329649 29.2639 0.266522C29.1119 0.203395 28.949 0.170898 28.7844 0.170898C28.6198 0.170898 28.4569 0.203395 28.3049 0.266522C28.1529 0.329649 28.0149 0.422165 27.8988 0.53876Z" fill="#A63A42"/>
                    </svg>
                </div>
                <div class="services-how-work-text-block _block-one">
                    <div class="services-how-work-option-title">Schedule the appointment</div>
                    <div class="services-how-work-option-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                </div>
            </div>

            <div class="services-how-work-option">
                <div class="services-how-work-img-block">
                    <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4188 3.90253L19.3487 1.83003C18.7696 1.24792 18.0807 0.786448 17.322 0.47233C16.5633 0.158212 15.7499 -0.00231999 14.9288 2.53318e-05H7C5.34301 0.00201015 3.75445 0.661128 2.58277 1.8328C1.4111 3.00447 0.751985 4.59303 0.75 6.25003V23.75C0.751985 25.407 1.4111 26.9956 2.58277 28.1673C3.75445 29.3389 5.34301 29.998 7 30H17C18.657 29.998 20.2456 29.3389 21.4172 28.1673C22.5889 26.9956 23.248 25.407 23.25 23.75V8.32128C23.252 7.50026 23.0912 6.68698 22.7769 5.92852C22.4625 5.17005 22.0009 4.48144 21.4188 3.90253ZM19.6513 5.67003C19.8286 5.84667 19.9873 6.04102 20.125 6.25003H17V3.12503C17.2087 3.26418 17.4033 3.42325 17.5812 3.60003L19.6513 5.67003ZM20.75 23.75C20.75 24.7446 20.3549 25.6984 19.6517 26.4017C18.9484 27.1049 17.9946 27.5 17 27.5H7C6.00544 27.5 5.05161 27.1049 4.34835 26.4017C3.64509 25.6984 3.25 24.7446 3.25 23.75V6.25003C3.25 5.25546 3.64509 4.30164 4.34835 3.59838C5.05161 2.89511 6.00544 2.50003 7 2.50003H14.5V6.25003C14.5 6.91307 14.7634 7.54895 15.2322 8.01779C15.7011 8.48663 16.337 8.75003 17 8.75003H20.75V23.75ZM17 11.25C17.3315 11.25 17.6495 11.3817 17.8839 11.6161C18.1183 11.8506 18.25 12.1685 18.25 12.5C18.25 12.8315 18.1183 13.1495 17.8839 13.3839C17.6495 13.6183 17.3315 13.75 17 13.75H7C6.66848 13.75 6.35054 13.6183 6.11612 13.3839C5.8817 13.1495 5.75 12.8315 5.75 12.5C5.75 12.1685 5.8817 11.8506 6.11612 11.6161C6.35054 11.3817 6.66848 11.25 7 11.25H17ZM18.25 17.5C18.25 17.8315 18.1183 18.1495 17.8839 18.3839C17.6495 18.6183 17.3315 18.75 17 18.75H7C6.66848 18.75 6.35054 18.6183 6.11612 18.3839C5.8817 18.1495 5.75 17.8315 5.75 17.5C5.75 17.1685 5.8817 16.8506 6.11612 16.6161C6.35054 16.3817 6.66848 16.25 7 16.25H17C17.3315 16.25 17.6495 16.3817 17.8839 16.6161C18.1183 16.8506 18.25 17.1685 18.25 17.5ZM18.01 21.7663C18.2043 22.0336 18.2849 22.367 18.234 22.6935C18.1832 23.0201 18.0051 23.3132 17.7388 23.5088C16.4723 24.4112 14.9723 24.929 13.4188 25C12.5111 24.9957 11.631 24.6876 10.9188 24.125C10.5087 23.8438 10.3525 23.75 10.0438 23.75C9.20803 23.8793 8.41952 24.2211 7.75375 24.7425C7.48968 24.9308 7.1628 25.009 6.84211 24.9608C6.52143 24.9125 6.23206 24.7415 6.03511 24.4839C5.83815 24.2262 5.74903 23.9021 5.78656 23.58C5.82409 23.2579 5.98534 22.963 6.23625 22.7575C7.33772 21.9024 8.66035 21.3795 10.0487 21.25C10.8814 21.2633 11.6864 21.5511 12.3387 22.0688C12.6361 22.3362 13.019 22.4891 13.4188 22.5C14.4408 22.4235 15.4237 22.0743 16.265 21.4888C16.5333 21.2943 16.8677 21.2143 17.1949 21.2664C17.5221 21.3184 17.8153 21.4982 18.01 21.7663Z" fill="#A63A42"/>
                    </svg>
                </div>
                <div class="services-how-work-text-block _block-two">
                    <div class="services-how-work-option-title">Approve the estimate</div>
                    <div class="services-how-work-option-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                </div>
            </div>

            <div class="services-how-work-option">
                <div class="services-how-work-img-block">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.6337 27.8662L22.1725 20.405C24.2058 17.9182 25.2054 14.7451 24.9648 11.5419C24.7241 8.33876 23.2615 5.35064 20.8795 3.19562C18.4974 1.04061 15.3782 -0.116413 12.167 -0.0361233C8.95584 0.0441664 5.89835 1.35563 3.62699 3.62699C1.35563 5.89835 0.0441664 8.95584 -0.0361233 12.167C-0.116413 15.3782 1.04061 18.4974 3.19562 20.8795C5.35064 23.2615 8.33876 24.7241 11.5419 24.9648C14.7451 25.2054 17.9182 24.2058 20.405 22.1725L27.8662 29.6337C28.102 29.8614 28.4177 29.9874 28.7455 29.9846C29.0732 29.9817 29.3867 29.8503 29.6185 29.6185C29.8503 29.3867 29.9817 29.0732 29.9846 28.7455C29.9874 28.4177 29.8614 28.102 29.6337 27.8662ZM12.5 22.5C10.5222 22.5 8.58876 21.9135 6.94427 20.8147C5.29978 19.7159 4.01805 18.1541 3.26118 16.3268C2.5043 14.4995 2.30627 12.4889 2.69212 10.5491C3.07797 8.60926 4.03038 6.82743 5.4289 5.4289C6.82743 4.03038 8.60926 3.07797 10.5491 2.69212C12.4889 2.30627 14.4995 2.5043 16.3268 3.26118C18.1541 4.01805 19.7159 5.29978 20.8147 6.94427C21.9135 8.58876 22.5 10.5222 22.5 12.5C22.497 15.1512 21.4425 17.693 19.5678 19.5678C17.693 21.4425 15.1512 22.497 12.5 22.5Z" fill="#A63A42"/>
                    </svg>
                </div>
                <div class="services-how-work-text-block _block-three">
                    <div class="services-how-work-option-title">Get diagnostic result</div>
                    <div class="services-how-work-option-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                </div>
            </div>

            <div class="services-how-work-option">
                <div class="services-how-work-img-block">
                    <svg width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.8988 0.53876L10.625 17.8113C10.5089 17.9279 10.3709 18.0204 10.2189 18.0835C10.0669 18.1466 9.90397 18.1791 9.7394 18.1791C9.57484 18.1791 9.41189 18.1466 9.25991 18.0835C9.10793 18.0204 8.96992 17.9279 8.85378 17.8113L2.17378 11.125C2.05764 11.0084 1.91963 10.9159 1.76765 10.8528C1.61567 10.7896 1.45272 10.7571 1.28815 10.7571C1.12359 10.7571 0.96064 10.7896 0.808662 10.8528C0.656684 10.9159 0.518666 11.0084 0.402529 11.125C0.285934 11.2411 0.193418 11.3792 0.130291 11.5311C0.0671638 11.6831 0.034668 11.8461 0.034668 12.0106C0.034668 12.1752 0.0671638 12.3382 0.130291 12.4901C0.193418 12.6421 0.285934 12.7801 0.402529 12.8963L7.08503 19.5775C7.78996 20.2811 8.74528 20.6763 9.74128 20.6763C10.7373 20.6763 11.6926 20.2811 12.3975 19.5775L29.67 2.30876C29.7864 2.19265 29.8788 2.05471 29.9418 1.90284C30.0048 1.75098 30.0373 1.58818 30.0373 1.42376C30.0373 1.25934 30.0048 1.09654 29.9418 0.944676C29.8788 0.792813 29.7864 0.654875 29.67 0.53876C29.5539 0.422165 29.4159 0.329649 29.2639 0.266522C29.1119 0.203395 28.949 0.170898 28.7844 0.170898C28.6198 0.170898 28.4569 0.203395 28.3049 0.266522C28.1529 0.329649 28.0149 0.422165 27.8988 0.53876Z" fill="#A63A42"/>
                    </svg>
                </div>
                <div class="services-how-work-text-block _block-four">
                    <div class="services-how-work-option-title">Get fixed appliance</div>
                    <div class="services-how-work-option-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                </div>
            </div>
        </div>

        <form action="" class="main-form js-form-block">
            <div class="form-left">
                <div class="main-form-title">Leave your application right now</div>
                <div class="main-form-text">Complete the form, and we'll call you back soon</div>
                <div class="main-form-checkbox-block">
                    <input type="checkbox" class="main-form-checkbox js-check-more" id="check-more" onchange="toggleForm()">
                    <label for="check-more">Additional Information</label>
                </div>
            </div>
            <div class="form-right">
                <div class="main-form-title">Leave your application right now</div>
                <div class="main-form-text">Complete the form, and we'll call you back soon</div>
                <input class="main-form-input _first" type="text" placeholder="Name*"/>
                <input class="main-form-input" type="text" placeholder="Phone number*"/>
                <div class="main-form-subwrap js-form-hideWrap">
                    <div class="main-form-line">
                        <input class="main-form-input _small" type="text" placeholder="Zip*"/>
                        <span class="form-select-wrap">
                            <select class="main-form-input _small" type="text" placeholder="Type of appliance">
                                <option>test1</option>
                                <option>test2</option>
                                <option>test3</option>
                            </select>
                        </span>
                    </div>
                    <div class="main-form-line">
                        <span class="form-select-wrap">
                            <select class="main-form-input _small" type="text" placeholder="Select brand">
                                <option>test1</option>
                                <option>test2</option>
                                <option>test3</option>
                            </select>
                        </span>
                        <input class="main-form-input _small" type="text" placeholder="Email"/>
                    </div>
                    <textarea class="main-form-input" type="text" placeholder="Message"></textarea>
                </div>
                <input type="submit" class="main-form-button" title="Get FREE diagnostic" value="Get FREE diagnostic"/>
                <div class="main-form-checkbox-block">
                    <input type="checkbox" class="main-form-checkbox js-check-more-mobile" id="check-more-mobile" onchange="toggleForm()">
                    <label for="check-more-mobile">Additional Information</label>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="services-about">
    <div class="layout-main">
        <div class="about-block">
            <div class="about-left">
                <div class="about-title">About us</div>
                <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                <ul class="about-list">
                    <li class="about-item">
                        <div class="about-number">10 +</div>
                        <div class="about-item-text">years of work and improvement of our skills, thanks to which we can solve any problem</div>
                    </li>
                    <li class="about-item">
                        <div class="about-number">14 +</div>
                        <div class="about-item-text">thousand satisfied customers who turned to us for help and their number is only growing</div>
                    </li>
                    <li class="about-item">
                        <div class="about-number">8</div>
                        <div class="about-item-text">real specialists. A team that will help you with any tasks related to your home appliances</div>
                    </li>
                </ul>
                <button class="about-button js-about-button" onclick="toggleAboutBlock()">Other advantages</button>
            </div>
            <div class="about-right">
                <div class="about-img">
                    <svg class="about-mobile-img" width="241" height="334" viewBox="0 0 241 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.8647 212.902L13.8647 255.401H24.3679C31.7141 255.401 36.0854 251.515 36.0854 244.837V244.169C36.0854 238.037 32.2605 234.273 29.1035 233.969V233.362C32.1998 232.998 35.2961 229.841 35.2961 223.709V223.405C35.2961 216.666 31.2891 212.902 24.2465 212.902H13.8647ZM22.3644 220.309H24.1251C26.0679 220.309 26.7964 221.22 26.7964 223.405V226.927C26.7964 229.112 26.0679 229.962 24.1251 229.962H22.3644V220.309ZM22.3644 237.369H24.2465C26.25 237.369 27.1 238.341 27.1 240.587V244.837C27.1 247.083 26.3107 247.994 24.3072 247.994H22.3644V237.369ZM40.876 212.841L36.1404 255.34H44.6401L45.5508 244.837H49.2543L50.2256 255.34H58.7254L54.1719 212.841H40.876ZM46.2186 237.43L47.1293 227.291H47.7364L48.5864 237.43H46.2186ZM56.8917 212.902L63.3271 243.623V255.401H71.8269L71.8269 243.623L78.5052 212.902H69.9448L67.9413 231.844H67.3949L65.3914 212.902H56.8917ZM90.17 212.902L90.17 255.401H98.0019L97.0912 227.655H97.6376L101.159 255.401H106.805L110.326 227.655H110.873L109.962 255.401L117.733 255.401L117.733 212.902H106.744L104.316 240.83H103.709L101.22 212.902L90.17 212.902ZM123.881 212.841L119.145 255.34H127.645L128.556 244.837H132.259L133.231 255.34H141.73L137.177 212.841H123.881ZM129.224 237.43L130.134 227.291H130.741L131.591 237.43H129.224ZM164.32 227.959V223.405C164.32 216.363 160.252 212.295 153.27 212.295C146.409 212.295 142.524 216.241 142.524 223.405V224.134C142.524 230.752 143.981 233.787 148.534 235.912L150.841 236.944C155.213 239.069 155.881 239.919 155.881 242.469V245.565C155.881 247.508 154.97 248.601 153.391 248.601C151.813 248.601 150.902 247.508 150.902 245.505V240.344H142.402V244.837C142.402 252.062 146.288 256.008 153.27 256.008C160.313 256.008 164.441 251.94 164.441 244.837V243.865C164.441 237.248 162.923 234.334 158.43 232.269L156.366 231.359C151.631 229.112 151.024 228.202 151.024 225.652V222.798C151.024 220.795 151.874 219.702 153.391 219.702C154.909 219.702 155.82 220.795 155.82 222.798V227.959H164.32ZM186.457 212.841H165.511V220.248H171.704V255.34H180.203V220.248H186.457V212.841ZM203.479 220.248V212.841H187.997V255.401H203.661V247.994H196.497V236.823H203.357V229.416H196.497V220.248H203.479ZM205.31 212.902V255.461H213.809V239.191H215.752C217.574 239.191 218.424 240.162 218.424 242.348V246.719C218.424 249.997 218.484 252.851 219.031 255.401H227.53C226.984 253.033 226.923 250.422 226.923 246.78V246.172C226.923 239.98 223.645 236.094 220.67 235.791V235.184C223.645 234.88 226.923 231.359 226.923 224.559V224.255C226.923 216.727 222.856 212.902 215.813 212.902H205.31ZM213.809 220.309H215.752C217.574 220.309 218.424 221.341 218.424 223.527V228.505C218.424 230.752 217.574 231.784 215.752 231.784H213.809V220.309ZM32.4865 269.841L27.751 312.34H36.2507L37.1614 301.837H40.8648L41.8362 312.34H50.3359L45.7825 269.841H32.4865ZM37.8292 294.43L38.7399 284.291H39.347L40.197 294.43H37.8292ZM51.6616 269.902V312.401H60.1613V298.74H62.1041C69.6324 298.74 73.2752 295.098 73.2752 284.777V284.655C73.2752 274.577 69.3289 269.902 62.1648 269.902H51.6616ZM60.1613 277.309H62.1041C64.0469 277.309 64.7755 278.341 64.7755 281.012V287.873C64.7755 290.362 64.0469 291.394 62.1041 291.394H60.1613V277.309ZM74.903 269.902V312.401H83.4027V298.74H85.3455C92.8738 298.74 96.5166 295.098 96.5166 284.777V284.655C96.5166 274.577 92.5703 269.902 85.4062 269.902H74.903ZM83.4027 277.309H85.3455C87.2883 277.309 88.0169 278.341 88.0169 281.012V287.873C88.0169 290.362 87.2883 291.394 85.3455 291.394H83.4027V277.309ZM98.2051 269.841V312.401H113.687V304.994H106.705V269.841H98.2051ZM114.983 269.902V312.401H123.482V269.902H114.983ZM129.543 269.841L124.807 312.34L133.307 312.34L134.218 301.837H137.921L138.893 312.34H147.392L142.839 269.841H129.543ZM134.886 294.43L135.796 284.291H136.404L137.253 294.43H134.886ZM162.621 269.902L164.625 297.83H164.139L158.068 269.902H148.718L148.718 312.401H157.218L155.336 284.655H155.821L161.711 312.401H171.121L171.121 269.902H162.621ZM181.644 279.738C181.644 277.43 182.858 276.641 184.133 276.641C185.408 276.641 186.622 277.43 186.622 279.738V289.451H195.122V280.345C195.122 272.998 190.75 269.234 184.011 269.234C177.394 269.234 173.144 272.877 173.144 280.345L173.144 301.837C173.144 309.365 177.394 313.008 184.011 313.008C190.75 313.008 195.122 309.244 195.122 301.837V292.791H186.622V302.505C186.622 304.812 185.408 305.601 184.133 305.601C182.858 305.601 181.644 304.812 181.644 302.505L181.644 279.738ZM212.58 277.248V269.841H197.098L197.098 312.401H212.762V304.994H205.598V293.823H212.458L212.458 286.416H205.598V277.248H212.58Z" fill="white"/>
                        <ellipse cx="120.283" cy="93.7142" rx="93.6405" ry="93.7142" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M83.0357 174.1C94.2927 179.282 106.821 182.156 120.01 182.156C145.067 182.156 167.675 171.792 183.784 155.114C169.465 153.983 152.226 155.444 134.611 163.217C118.361 170.425 100.18 173.534 83.0357 174.1Z" fill="#2A985D"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M54.6812 153.465C60.5217 159.825 67.3042 165.337 74.7931 169.813H74.9344C93.8218 170.001 114.593 167.222 132.821 159.166C152.603 150.403 171.915 149.367 187.505 151.016C191.085 146.823 194.287 142.3 197.019 137.448C180.864 134.338 158.114 133.396 134.611 143.808C115.771 152.146 94.3399 154.973 74.8874 154.785C67.8223 154.69 60.9927 154.219 54.6812 153.465Z" fill="#2A985D"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.7648 137.071C45.0255 141.075 47.6161 144.891 50.4422 148.472C57.884 149.555 66.1738 150.262 74.9344 150.356C87.0394 150.498 99.9919 149.414 112.521 146.446L112.238 146.352C109.695 145.457 107.245 144.467 104.937 143.431C81.5757 133.114 58.9203 133.962 42.7648 137.071Z" fill="#2A985D"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M146.57 9.45607L140.758 34.9289C140.388 36.5511 138.773 37.5662 137.151 37.1961L126.811 34.8371C125.182 34.4654 124.162 32.8431 124.534 31.2137L130.342 5.75776C133.082 6.11919 135.829 6.61147 138.577 7.23896C141.301 7.86088 143.967 8.60217 146.57 9.45607Z" fill="#DBDBDB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M96.3908 27.6511C99.1577 26.6161 102.003 25.7621 104.908 25.1001L109.192 6.17761C91.0437 8.44494 74.5909 16.1584 61.5694 27.6511H96.3908ZM55.9811 71.8719C61.6277 50.8575 77.1126 34.8626 96.3898 27.6515H61.5694C54.3783 33.9688 48.228 41.4646 43.4023 49.7619H43.4097C39.4358 56.5976 36.3606 64.046 34.3264 71.8719H55.9811ZM34.3192 71.8721H55.981C55.7544 72.7153 55.5437 73.5666 55.3492 74.4257C50.7306 94.8265 56.2737 115.187 68.6617 130.313C59.7133 129.963 50.6885 130.689 41.7464 132.404L40.4217 132.64C37.8669 127.407 35.8327 121.891 34.3187 116.139L34.3434 116.14C32.5457 109.068 31.5521 101.62 31.5521 93.9823H31.528C31.528 86.3452 32.5215 78.9436 34.3192 71.8721ZM105.142 138.25C100.668 136.387 96.1111 134.862 91.4938 133.66L91.4938 95.6003C91.4938 93.382 92.6327 91.3191 94.5098 90.1374L116.753 76.1348C118.835 74.8238 121.481 74.8111 123.576 76.1021L146.365 90.1452C148.272 91.3204 149.433 93.4005 149.433 95.6408V133.787C144.805 134.949 140.237 136.432 135.751 138.25H135.752C134.805 138.627 133.859 139.051 132.913 139.475C128.844 141.267 124.634 142.775 120.376 144.048L114.131 141.88C111.813 141.031 109.495 140.135 107.176 139.098C106.514 138.815 105.852 138.533 105.142 138.25H105.142ZM184.763 103.77C182.454 113.968 177.859 123.062 171.629 130.645C180.605 130.306 189.658 131.046 198.626 132.781L200.045 133.064C202.742 127.69 204.824 122.032 206.385 116.139L206.409 116.14C208.207 109.068 209.201 101.619 209.201 93.9821H209.176C209.176 86.3451 208.23 78.9435 206.385 71.8721H183.963C186.797 81.9638 187.233 92.8612 184.763 103.77ZM161.279 37.8774C172.258 46.5698 180.211 58.5151 183.963 71.8719H206.392C204.358 64.046 201.283 56.5975 197.309 49.7617H197.301C192.476 41.4645 186.325 33.9687 179.182 27.6515H163.594L161.279 37.8774ZM163.594 27.6511H179.182C175.043 24.0099 170.564 20.748 165.797 17.9185L163.594 27.6511ZM114.105 104.844C112.57 104.844 111.326 106.088 111.326 107.623V120.142C111.326 121.677 112.57 122.921 114.105 122.921H126.61C128.145 122.921 129.389 121.677 129.389 120.142V107.623C129.389 106.088 128.145 104.844 126.61 104.844H114.105Z" fill="#A63A42"/>
                    </svg>
                    <svg  class="about-desk-img" width="340" height="116" viewBox="0 0 340 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="57.362" cy="57.362" r="57.362" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.5489 106.566C41.4446 109.738 49.1195 111.497 57.1982 111.497C72.5479 111.497 86.3972 105.153 96.2648 94.9454C87.4936 94.2533 76.9335 95.1472 66.1426 99.9052C56.1884 104.317 45.0513 106.22 34.5489 106.566Z" fill="#2A985D"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.1796 93.9362C20.7573 97.8291 24.9121 101.203 29.4997 103.942H29.5862C41.1562 104.058 53.8802 102.356 65.0462 97.4254C77.1644 92.0618 88.994 91.4275 98.5442 92.4367C100.737 89.8703 102.699 87.1019 104.372 84.1318C94.476 82.2286 80.5402 81.652 66.1426 88.0247C54.6016 93.1287 41.4736 94.8589 29.5574 94.7436C25.2295 94.686 21.0459 94.3976 17.1796 93.9362Z" fill="#2A985D"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87988 83.9013C11.2648 86.3523 12.8517 88.688 14.5829 90.8796C19.1416 91.5428 24.2197 91.9754 29.5862 92.033C37.0014 92.1196 44.9359 91.4563 52.6107 89.6396L52.4376 89.582C50.8796 89.0341 49.3792 88.4285 47.9654 87.794C33.6545 81.479 19.7764 81.9981 9.87988 83.9013Z" fill="#2A985D"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M73.4665 5.788L69.9466 21.2161C69.6993 22.3001 68.62 22.9785 67.5359 22.7311L61.5304 21.361C60.4415 21.1125 59.7602 20.0285 60.0086 18.9396L63.5256 3.52423C65.2039 3.74546 66.8869 4.04677 68.5703 4.43083C70.2389 4.81152 71.8718 5.2653 73.4665 5.788Z" fill="#DBDBDB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M89.6186 30.4574C87.5666 27.7621 85.1714 25.3136 82.4793 23.1841L85.2469 10.9689C88.1655 12.7005 90.9085 14.6965 93.443 16.9245H93.4417C97.8174 20.7911 101.585 25.379 104.541 30.4574H89.6186ZM47.9476 15.3652C38.6151 17.4903 30.2977 22.8485 24.5744 30.4574H10.2656C13.2217 25.3786 16.9892 20.7905 21.3943 16.9237H21.3974C29.3747 9.8888 39.4542 5.16751 50.5724 3.78027L47.9476 15.3652ZM17.9787 43.9914C19.3306 38.9653 21.6027 34.4083 24.574 30.4579H10.2733C7.8389 34.642 5.95514 39.2012 4.70898 43.9914H17.9787ZM89.619 30.4579C92.6935 34.4962 94.9976 39.0884 96.3761 43.9914H110.113C108.866 39.2012 106.983 34.642 104.548 30.4579H89.619ZM4.704 43.9926H17.9784C17.8395 44.509 17.7103 45.0304 17.5911 45.5566C15.5729 54.4641 16.7221 63.3589 20.3013 71.0873C21.7394 74.1923 23.5697 77.1091 25.7444 79.7627C20.2623 79.5485 14.7333 79.9928 9.25506 81.0427L8.4436 81.187C6.87863 77.9839 5.63248 74.6078 4.70508 71.0873L4.71962 71.0873C3.61847 66.7592 3.00988 62.2004 3.00977 57.5261H2.99414C2.99414 52.8515 3.60274 48.321 4.704 43.9926ZM48.0895 84.6209C45.3493 83.4809 42.5577 82.547 39.7293 81.8113L39.7293 71.0873V58.7171C39.7293 57.2344 40.4909 55.8556 41.746 55.0661L55.0137 46.7201C56.4049 45.845 58.1725 45.8366 59.572 46.6983L73.1699 55.0713C74.445 55.8564 75.2217 57.2467 75.2217 58.7442V71.0873V81.8892C72.3867 82.6004 69.5879 83.5084 66.8401 84.6209H48.0895ZM111.833 57.5248C111.833 62.1995 111.224 66.7588 110.123 71.0873H94.3374C95.4129 68.6989 96.2664 66.1695 96.8671 63.5182C98.38 56.8405 98.1129 50.1699 96.3764 43.9926H110.108C111.238 48.3206 111.817 52.8506 111.817 57.5248H111.833ZM94.3374 71.0873C92.8811 74.3211 91.0176 77.2964 88.8232 79.9658C94.3201 79.759 99.8638 80.2117 105.356 81.2736L106.225 81.4467C107.877 78.1571 109.152 74.6944 110.109 71.0873L94.3374 71.0873ZM53.731 64.1732C52.7054 64.1732 51.874 65.0047 51.874 66.0303V73.381C51.874 74.4066 52.7054 75.238 53.731 75.238H61.0818C62.1074 75.238 62.9388 74.4066 62.9388 73.381V66.0303C62.9388 65.0047 62.1074 64.1732 61.0818 64.1732H53.731ZM48.0889 84.621C48.5236 84.7941 48.9294 84.9672 49.3351 85.1404C50.7552 85.7752 52.1752 86.3234 53.5953 86.8428L57.4207 88.1703C60.029 87.3911 62.6083 86.4677 65.1007 85.3712C65.6803 85.1115 66.2599 84.8517 66.8395 84.621H48.0889Z" fill="#A63A42"/>
                        <path d="M142.692 15.3008V50.3438H151.352C157.41 50.3438 161.014 47.1398 161.014 41.6331V41.0824C161.014 36.0262 157.86 32.9224 155.257 32.6721V32.1715C157.81 31.8711 160.364 29.2679 160.364 24.2117V23.9614C160.364 18.4046 157.059 15.3008 151.252 15.3008L142.692 15.3008ZM149.7 21.4083H151.152C152.754 21.4083 153.355 22.1592 153.355 23.9614V26.865C153.355 28.6672 152.754 29.368 151.152 29.368H149.7V21.4083ZM149.7 35.4755H151.252C152.904 35.4755 153.605 36.2765 153.605 38.1288V41.6331C153.605 43.4853 152.954 44.2363 151.302 44.2363H149.7V35.4755ZM164.964 15.2507L161.06 50.2937L168.068 50.2937L168.819 41.6331H171.873L172.674 50.2937H179.683L175.928 15.2507L164.964 15.2507ZM169.37 35.5256L170.121 27.1653H170.621L171.322 35.5256H169.37ZM178.17 15.3008L183.477 40.6318V50.3438H190.486V40.6318L195.992 15.3008L188.934 15.3008L187.282 30.9199H186.831L185.179 15.3008H178.17ZM205.611 15.3008V50.3438L212.069 50.3438L211.318 27.4657H211.768L214.672 50.3438H219.328L222.231 27.4657H222.682L221.931 50.3438H228.339V15.3008L219.278 15.3008L217.275 38.329H216.774L214.722 15.3008H205.611ZM233.408 15.2507L229.503 50.2937H236.512L237.262 41.6331H240.316L241.117 50.2937H248.126L244.371 15.2507L233.408 15.2507ZM237.813 35.5256L238.564 27.1653H239.065L239.766 35.5256H237.813ZM266.752 27.716V23.9614C266.752 18.1543 263.398 14.8002 257.641 14.8002C251.984 14.8002 248.78 18.0542 248.78 23.9614V24.5622C248.78 30.0188 249.982 32.5219 253.736 34.2741L255.638 35.1251C259.243 36.8772 259.794 37.5781 259.794 39.6807V42.2338C259.794 43.8358 259.043 44.7369 257.741 44.7369C256.439 44.7369 255.689 43.8358 255.689 42.1838V37.9285H248.68V41.6331C248.68 47.5904 251.884 50.8444 257.641 50.8444C263.448 50.8444 266.852 47.4903 266.852 41.6331V40.8321C266.852 35.3754 265.601 32.9725 261.896 31.2704L260.194 30.5195C256.289 28.6672 255.789 27.9163 255.789 25.8137V23.4608C255.789 21.8088 256.49 20.9077 257.741 20.9077C258.993 20.9077 259.744 21.8088 259.744 23.4608V27.716L266.752 27.716ZM285.006 15.2507L267.735 15.2507V21.3582H272.841V50.2937H279.849V21.3582H285.006V15.2507ZM299.042 21.3582V15.2507L286.276 15.2507V50.3438L299.192 50.3438V44.2363L293.285 44.2363V35.025H298.942V28.9175H293.285V21.3582H299.042ZM300.551 15.3008V50.3938H307.56V36.9774H309.162C310.664 36.9774 311.365 37.7784 311.365 39.5806V43.185C311.365 45.8883 311.415 48.2412 311.865 50.3438H318.874C318.423 48.3914 318.373 46.2387 318.373 43.235V42.7344C318.373 37.6282 315.67 34.4242 313.217 34.1739V33.6733C315.67 33.423 318.373 30.5195 318.373 24.9126V24.6623C318.373 18.4547 315.019 15.3008 309.212 15.3008L300.551 15.3008ZM307.56 21.4083H309.162C310.664 21.4083 311.365 22.2593 311.365 24.0615V28.1666C311.365 30.0188 310.664 30.8699 309.162 30.8699H307.56V21.4083ZM145.996 64.2507L142.091 99.2937H149.1L149.851 90.6331H152.904L153.705 99.2937H160.714L156.959 64.2507H145.996ZM150.401 84.5256L151.152 76.1653H151.653L152.354 84.5256H150.401ZM161.807 64.3008L161.807 99.3438H168.816V88.0799H170.418C176.625 88.0799 179.629 85.0763 179.629 76.5658V76.4657C179.629 68.1555 176.375 64.3008 170.468 64.3008H161.807ZM168.816 70.4083H170.418C172.02 70.4083 172.62 71.2593 172.62 73.462V79.119C172.62 81.1715 172.02 82.0225 170.418 82.0225H168.816V70.4083ZM180.971 64.3008L180.971 99.3438L187.98 99.3438V88.0799H189.582C195.789 88.0799 198.793 85.0763 198.793 76.5658V76.4657C198.793 68.1555 195.539 64.3008 189.632 64.3008H180.971ZM187.98 70.4083H189.582C191.184 70.4083 191.784 71.2593 191.784 73.462V79.119C191.784 81.1715 191.184 82.0225 189.582 82.0225H187.98V70.4083ZM200.185 64.2507V99.3438H212.951V93.2363H207.194V64.2507H200.185ZM214.02 64.3008V99.3438H221.028V64.3008H214.02ZM226.026 64.2507L222.121 99.2937H229.129L229.88 90.6331H232.934L233.735 99.2937H240.744L236.989 64.2507H226.026ZM230.431 84.5256L231.182 76.1653H231.683L232.383 84.5256H230.431ZM253.301 64.3008L254.953 87.329H254.552L249.546 64.3008H241.837V99.3438H248.845L247.293 76.4657H247.694L252.55 99.3438H260.309V64.3008H253.301ZM268.986 72.4107C268.986 70.5084 269.987 69.8576 271.039 69.8576C272.09 69.8576 273.091 70.5084 273.091 72.4107V80.4206L280.1 80.4206V72.9114C280.1 66.8539 276.495 63.7501 270.938 63.7501C265.482 63.7501 261.977 66.7538 261.977 72.9114V90.6331C261.977 96.8407 265.482 99.8444 270.938 99.8444C276.495 99.8444 280.1 96.7406 280.1 90.6331V83.1739L273.091 83.1739V91.1838C273.091 93.0861 272.09 93.7369 271.039 93.7369C269.987 93.7369 268.986 93.0861 268.986 91.1838V72.4107ZM294.495 70.3582V64.2507H281.729L281.729 99.3438H294.645V93.2363H288.738V84.025H294.395V77.9175H288.738V70.3582H294.495Z" fill="white"/>
                    </svg>
                </div>
                <button class="about-img-button">Request service</button>
            </div>
        </div>
        <div class="about-hide-block js-about-toggle" style="max-height: 0; overflow: hidden">
            <div class="about-text-wrap">
                <div class="about-text-half">
                    <p class="about-text-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p class="about-text-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="about-text-half">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="about-text-bottom">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </div>
        </div>
    </div>
</section>

<section class="services-review">
    <div class="layout-main">
        <div class="review-top">
            <div class="review-text-block">
                <div class="review-title">What our clients say</div>
                <div class="review-text">We always keep promises and bring things to an end. Your review will be next.</div>
            </div>
            <button class="review-button">Leave your review</button>
        </div>
        <div class="review-wrap">
            <?php for ($i = 0; $i < 8; $i++) {?>
                <div class="review-item">
                    <div class="review-item-top">
                        <div class="review-item-person">
                            <img src="/skin/images/unsplash_EZ4TYgXPNWk.svg" alt="icon" class="review-person-icon">
                            <div class="review-item-text-block">
                                <div class="review-item-title">Belinda Nivaggioli</div>
                                <div class="review-item-text">Google reviewer</div>
                            </div>
                        </div>
                        <div class="review-item-star">
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z" fill="#A63A42"/>
                            </svg>
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z" fill="#A63A42"/>
                            </svg>
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z" fill="#A63A42"/>
                            </svg>
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z" fill="#A63A42"/>
                            </svg>
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z" fill="#A63A42"/>
                            </svg>
                        </div>
                    </div>
                    <div class="review-item-bottom-text">
                        The technician was very professional. He did excellent work and constantly communicate what was being done. He was properly equipped to deal with all situations.
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="review-more-item">
            See all reviews
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 12L1 1M12 12H2.83333M12 12V2.83333" stroke="#989898" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="layout-main">
       <!-- <form action="" class="main-form" style="margin-top: 40px;">
            <div class="form-left">
                <div class="main-form-title">Leave your application right now</div>
                <div class="main-form-text">Complete the form, and we'll call you back soon</div>
                <div class="main-form-checkbox-block">
                    <input type="checkbox" class="main-form-checkbox js-check-more" id="check-more"
                           onchange="toggleForm()">
                    <label for="check-more">Additional Information</label>
                </div>
            </div>
            <div class="form-right">
                <div class="main-form-title">Leave your application right now</div>
                <div class="main-form-text">Complete the form, and we'll call you back soon</div>
                <input class="main-form-input" type="text" placeholder="Name*"/>
                <input class="main-form-input" type="text" placeholder="Phone number*"/>
                <div class="main-form-subwrap js-form-hideWrap">
                    <div class="main-form-line">
                        <input class="main-form-input _small" type="text" placeholder="Zip*"/>
                        <span class="form-select-wrap">
                            <select class="main-form-input _small" type="text" placeholder="Type of appliance">
                                <option>test1</option>
                                <option>test2</option>
                                <option>test3</option>
                            </select>
                        </span>
                    </div>
                    <div class="main-form-line">
                        <span class="form-select-wrap">
                            <select class="main-form-input _small" type="text" placeholder="Select brand">
                                <option>test1</option>
                                <option>test2</option>
                                <option>test3</option>
                            </select>
                        </span>
                        <input class="main-form-input _small" type="text" placeholder="Email"/>
                    </div>
                    <textarea class="main-form-input" type="text" placeholder="Message"></textarea>
                </div>
                <input type="submit" class="main-form-button" title="Get FREE diagnostic" value="Get FREE diagnostic"/>
                <div class="main-form-checkbox-block">
                    <input type="checkbox" class="main-form-checkbox js-check-more-mobile" id="check-more-mobile"
                           onchange="toggleForm()">
                    <label for="check-more-mobile">Additional Information</label>
                </div>
            </div>
        </form>-->
    </div>
</section>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/footer.tpl.php");
?>
