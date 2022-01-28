<?php
$PAGE['meta_title'] = "ThankYou";
$page = 'ThankYou';
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/header.tpl.php");
?>

<div class="service-main _thxYou">
    <div class="layout-main">
        <div class="service-block">
            <div class="service-title">Thank you!<br/>Your application is accepted</div>
            <div class="service-text">
                Our manager will contact you as soon as possible to <br/> clarify the details of your application.
            </div>
            <div class="service-button-block">
                <a href="/" class="service-button">Go to main page</a>
            </div>
        </div>
    </div>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/footer.tpl.php");
?>
