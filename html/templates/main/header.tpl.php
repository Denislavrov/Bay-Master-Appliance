<?php include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/header.tpl.php") ?>
<div class="main-container">
<header class="main-header">
    <div class="js-menu header-mobile-menu__wrap">
        <ul class="header-mobile-menu__list">
            <li class="header-mobile-menu__el">
                <a href="/" class="header-mobile-menu__link">Home</a>
            </li>
            <li class="header-mobile-menu__el">
                <a href="/" class="header-mobile-menu__link">Premium</a>
            </li>
            <li class="header-mobile-menu__el">
                <a href="/" class="header-mobile-menu__link">Blog</a>
            </li>
            <li class="header-mobile-menu__el">
                <a href="/" class="header-mobile-menu__link">About us</a>
            </li>
        </ul>
		    <a
				    href="#request-popup"
				    class="js-openDialogAjax btn btn_attention mobile"
				    data-title="Have you recognize your problem?"
		    >
			    Request service
		    </a>
        <div class="header-mobile-menu__block">
            <div class="header-mobile-menu__working">
                <div>Mon - Fri</div>
                <div>8am - 6pm</div>
            </div>
            <div class="header-mobile-menu__weekend">
                <div>Saturday - Sunday</div>
                <div>Closed</div>
            </div>
        </div>
    </div>
    <div class="js-bg header-mobile-menu__bg" onclick="toggleMenu()"></div>
    <div class="header-main-wrap">
        <div class="layout-main">
        <div class="header-common">
            <div class="header-left">
                <a href="/" class="header-icon">
                    <img src="/skin/images/svg-sprite/newlogo.svg" alt="icon">
                </a>
                <ul class="header-menu">
                    <li class="header-menu-el">
                        <a href="/" class="header-menu-link">Home</a>
                    </li>
                    <li class="header-menu-el">
                        <a href="/" class="header-menu-link">Premium</a>
                    </li>
                    <li class="header-menu-el">
                        <a href="/" class="header-menu-link">Blog</a>
                    </li>
                    <li class="header-menu-el">
                        <a href="/" class="header-menu-link">About us</a>
                    </li>
                </ul>
            </div>
            <div class="header-right">
                <a href="#" class="header-contact">(408) 484-4353</a>
                <a class="header-mobile-menu" onclick="toggleMenu()">
                    <span>Menu</span>
                    <div class="header-burger">
                        <span class="header-burger-line"></span>
                        <span class="header-burger-line"></span>
                        <span class="header-burger-line"></span>
                    </div>
                </a>


		            <a
				            href="#request-popup"
				            class="js-openDialogAjax btn btn_attention header"
				            data-title="Have you recognize your problem?"
		            >
			            Request service
		            </a>
            </div>
        </div>
    </div>
    </div>
</header>

<?php if ($page!='index') {?>
    <main
			class="main-center mt-80<?=($page=='location') ? ' page-bckg page-bckg_location' : ''?><?=($page=='repair' || $page=='blog_article') ? ' full-height' : ''?>"
			<?=($page=='location') ? 'style="background-image: url(/skin/images/location-bckg.png);"' : '' ?>
		>
<?php }?>
        <?php if ($page!='index' && $page!='repair' && $page!='about_us' && $page!='blog_article') {?>
	        <div class="layout-main">
        <?php }?>
