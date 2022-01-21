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
                <div class="services-how-work-text-block">
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
                <div class="services-how-work-text-block">
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
                <div class="services-how-work-text-block">
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
                <div class="services-how-work-text-block">
                    <div class="services-how-work-option-title">Get fixed appliance</div>
                    <div class="services-how-work-option-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                </div>
            </div>
        </div>

        <form action="" class="main-form">
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
                <input class="main-form-input" type="text" placeholder="Name*"/>
                <input class="main-form-input" type="text" placeholder="Phone number*"/>
                <div class="main-form-subwrap js-form-hideWrap">
                    <div class="main-form-line">
                        <input class="main-form-input _small" type="text" placeholder="Zip*"/>
                        <select class="main-form-input _small" type="text" placeholder="Type of appliance">
                            <option>test1</option>
                            <option>test2</option>
                            <option>test3</option>
                        </select>
                    </div>
                    <div class="main-form-line">
                        <select class="main-form-input _small" type="text" placeholder="Select brand">
                            <option>test1</option>
                            <option>test2</option>
                            <option>test3</option>
                        </select>
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

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/footer.tpl.php");
?>
