    <?php if ($page!='index' && $page!='repair') {?></div><?php }//.layout-main?>
</main><?php //.main-center?>

<footer class="main-footer">
    <div class="layout-main">
        <div class="footer">
            <div class="footer__top">
                <div class="footer__block footer__block_info">
                    <a href="/" class="footer__logo">
                        <img src="/skin/images/logo-black.svg" class="footer-logo" alt="Master Appliance Logo">
                    </a>
                    <div class="footer__description">
                        We&nbsp;work to&nbsp;provide people with comfort and quality service with a&nbsp;guarantee for all work
                    </div>
                </div>
                <div class="hidden footer__block footer__block_workdays">
                    <div class="footer__block-title">
                        Work days
                    </div>
                    <div class="footer__work-days work-days">
                        <div class="work-days__block">
                            <div class="work-days__day">
                                Mon - Fri
                            </div>
                            <div class="work-days__time">
                                8am - 6pm
                            </div>
                        </div>
                        <div class="work-days__block">
                            <div class="work-days__day">
                                Saturday - Sunday
                            </div>
                            <div class="work-days__time red">
                                Closed
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__block footer__block_menu">
                    <div class="footer__block-title">
                        Useful links
                    </div>
                    <div class="footer__menu">
                        <nav class="footer-menu">
	                        <?php
                                $menu = ["Home", "Blog", "Location", "About Us"];
	                            foreach ($menu as &$item) {
                            ?>
                            <li class="footer-menu__item">
	                            <a href="#">
	                                <?=$item?>
	                            </a>
                            </li>
                            <?php }?>
                        </nav>
                    </div>
                </div>
                <div class="footer__block">
                    <div class="footer__block-title">
                        Our contacts
                    </div>
                    <div class="footer__contacts footer-contacts">
                        <div class="footer-contacts__phone">
                            <a href="tel:4084844353" class="footer-phone">(408) 484-4353</a>
                        </div>
                        <div class="footer-contacts__email">
                            <a href="mailto:service@master-appliance.com" class="footer-email">service@master-appliance.com</a>
                        </div>
                        <div class="footer-contacts__request">
                            <a
		                            href="#request-popup"
		                            class="js-openDialogAjax btn-inverse btn-inverse_base footer-request-button"
		                            data-title="Have you recognize your problem?"
                            >
	                            Request service
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__block ">
                    <div class="footer__copyright">
                        Copyright ©<?=date('Y')?> MASTER APPLIANCE. All rights reserved.
                    </div>
                </div>
                <div class="footer__block footer__block_social">
                    <div class="footer__social-networks social-networks">
	                    <a href="#" class="social-networks__item">
		                    <svg class="svg-icon icon-google">
			                    <use xlink:href="/skin/images/svg-sprite.svg#google"></use>
		                    </svg>
	                    </a>
	                    <a href="#" class="social-networks__item">
		                    <svg class="svg-icon icon-yelp">
			                    <use xlink:href="/skin/images/svg-sprite.svg#yelp"></use>
		                    </svg>
	                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="js-goUp go-up">
    <svg class="svg-icon icon-arrow">
        <use xlink:href="/skin/images/svg-sprite.svg#arrow"></use>
    </svg>
</a>

<div id="request-popup" class="request-popup" style="display: none;">
	<!--<div class="js-timer request-popup__timer request-timer">
		<div class="request-timer__description">
			Complete the form, and we&rsquo;ll call you back in&nbsp;5&nbsp;min
		</div>

		<div class="request-timer__timer">
			<div class="timer">
				<span class="timer__minutes">5</span>:<span class="timer__seconds">00</span>
			</div>
		</div>
	</div>-->

	<div class="request-popup__worktime">
		Our office is close right now leave your request, and we call you back:
		<div class="request-popup__worktime-day">
			Monday: 8am
		</div>
	</div>

<!--	<form class="request-popup__form request-popup__form_worktime request-popup-form">-->
<!--		<input type="tel" name="number" placeholder="Your number" class="inp-base">-->
<!--		<button class="btn btn_secondary btn-request-send w-100">Get FREE diagnostic</button>-->
<!--	</form>-->

	<form class="request-popup__form request-popup__form_worktime request-popup-form-edit">
		<div class="js-editContactInfo btn-edit-contact mr-20">Edit contact information</div>
		<button class="btn btn_success btn-request-edit w-100">Done</button>
	</form>

	<form class="request-popup__form request-popup__form_no-worktime request-popup-form">
		<div class="application-form__form">
			<div class="application-form__block">
				<div class="application-form__field">
					<input name="name" placeholder="Name*" class="inp-base">
				</div>
				<div class="application-form__field">
					<input type="tel" name="number" placeholder="Number*" class="inp-base">
				</div>
				<div class="application-form__field">
					<input name="zip" placeholder="Zip*" class="inp-base">
				</div>
				<div class="application-form__field">
					<select name="type_of_appliance" class="js-typeOfApplianceSelect select-base">
						<option disabled>Type of appliance</option>
						<option value="Dishwashers">Dishwashers</option>
						<option value="Dryers">Dryers</option>
					</select>
				</div>
			</div>
			<div class="application-form__block">
				<div class="application-form__field">
					<select name="brand" class="js-brandsSelect select-base">
						<option disabled>Brand</option>
						<option value="AGA">AGA</option>
						<option value="American Range">American Range</option>
						<option value="ALFRESCO">ALFRESCO</option>
						<option value="BERTAZZONI">BERTAZZONI</option>
						<option value="BLUESTAR">BLUESTAR</option>
					</select>
				</div>
				<div class="application-form__field">
					<input type="email" name="email" placeholder="Email" class="inp-base">
				</div>
				<div class="application-form__field application-form__field_button">
					<button class="btn btn_secondary application-form__btn">Get FREE diagnostic</button>
				</div>
			</div>
		</div>
	</form>
</div>

<div id="discount-popup" class="discount-popup" style="display: none;">
  <div class="discount-popup__description">
    Leave a request for diagnostics and get a 10% discount on the repair of your appliance
  </div>
  <div class="discount-popup__request">
	  <a
			  href="#request-popup"
			  class="js-openDialogAjax btn btn_attention"
			  data-title="Have you recognize your problem?"
	  >
		  Leave a service request
	  </a>
  </div>
  <a href="#" class="js-notInterested discount-popup__not-interested">
    Not interested
  </a>
</div>

<div id="review-popup" style="display: none;">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/review.tpl.php") ?>
</div>

</div><?php //.main-container?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/footer.tpl.php") ?>
