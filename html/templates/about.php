<?php
$PAGE['meta_title'] = "About";
$page = 'about';
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/header.tpl.php");
?>
<div class="service-main _about">
    <div class="layout-main">
        <div class="service-block">
            <div class="service-title">Welcome to<br/>Bay Master Appliance</div>
            <div class="service-text">
                Hello and thank you for choosing us! We'll try our best to give you the best quality of service. We have 10 years of experience in home appliance repair
            </div>
            <div class="service-button-block">
                <button class="service-button">Let`s get the job done</button>
                <a href="#" class="service-link">Read more</a>
            </div>
        </div>
    </div>
</div>

<section class="about">
    <div class="layout-main">
        <div class="about-wrapper">
            <div class="about-left _about">
            <div class="about-title">About us</div>
            <div class="about-text">We serve all major appliance types and brands and are prepared for all kinds of issues. Our technicians are trained and experienced. We use the best equipment accurate diagnostic and quick repair. Our team is happy to serve our neighbors in the Bay Area.</div>
            <div class="about-wrap _about">
                <div class="about-item _big-item">Same-day appointments and service</div>
                <div class="about-item _big-item">COVID-19 prepared: masks, gloves and shoe covers</div>
                <div class="about-item">Diagnostic Free with repair</div>
                <div class="about-item">Warranty up to 1 year</div>
                <div class="about-item">Floor and interior protection equipment</div>
                <div class="about-item">Most common parts on hand</div>
            </div>
        </div>
            <div class="about-right _about">
            <div class="slider">
                <div class="js-swiper-about swiper-container about-slider">
                    <div class="about-slider__prev">
                        <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4264 25.4855C14.7937 25.1181 15 24.6199 15 24.1004C15 23.5809 14.7937 23.0827 14.4264 22.7153L4.72885 13.0178L14.4264 3.32021C14.7833 2.95072 14.9807 2.45585 14.9763 1.94218C14.9718 1.42851 14.7658 0.93714 14.4025 0.573906C14.0393 0.210672 13.5479 0.00463867 13.0343 0.000175476C12.5206 -0.00428772 12.0257 0.193178 11.6562 0.550043L0.573598 11.6327C0.206323 12.0001 0 12.4983 0 13.0178C0 13.5372 0.206323 14.0355 0.573598 14.4028L11.6562 25.4855C12.0236 25.8528 12.5218 26.0591 13.0413 26.0591C13.5608 26.0591 14.059 25.8528 14.4264 25.4855Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="about-slider__next">
                        <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.573599 0.573598C0.206324 0.940984 0 1.4392 0 1.95868C0 2.47817 0.206324 2.97638 0.573599 3.34377L10.2711 13.0413L0.573599 22.7389C0.216732 23.1084 0.0192661 23.6032 0.0237293 24.1169C0.0281935 24.6306 0.23423 25.1219 0.597463 25.4852C0.960696 25.8484 1.45206 26.0544 1.96573 26.0589C2.4794 26.0634 2.97428 25.8659 3.34377 25.509L14.4264 14.4264C14.7937 14.059 15 13.5608 15 13.0413C15 12.5218 14.7937 12.0236 14.4264 11.6562L3.34377 0.573598C2.97638 0.206324 2.47817 0 1.95868 0C1.4392 0 0.940984 0.206324 0.573599 0.573598Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="swiper-wrapper about-slider__inner">
                        <?php for ($i = 0; $i < 6; $i++) {?>
                            <div class="slider__item swiper-slide">
                                <img src="/skin/images/try-to-screw-this-two-men-mechanics-checking-refrigerator%201.png" alt="main" class="slider__img">
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
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
    <section class="about-form">
        <div class="layout-main">
            <form action="" class="main-form">
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
            </form>
        </div>
    </section>
</section>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/footer.tpl.php");
?>
