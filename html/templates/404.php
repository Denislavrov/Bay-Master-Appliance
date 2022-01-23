<?php
$PAGE['meta_title'] = "404";
$page = '404';
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/header.tpl.php");
?>
<div class="service-main _404-error">
    <div class="layout-main">
        <div class="service-block">
            <img class="service-img-404" src="/skin/images/404404.png" alt="404"/>
            <div class="service-title">Ooops...<br/>Page not found</div>
            <div class="service-text">
                The page you are looking for doesn’t exit or an other error occurred, go back to home page.
            </div>
            <div class="service-button-block">
                <button class="service-button">Go back</button>
            </div>
        </div>
    </div>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/footer.tpl.php");
?>
