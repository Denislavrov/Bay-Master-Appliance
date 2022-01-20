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

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/html/templates/main/footer.tpl.php");
?>
