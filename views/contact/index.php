<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>
<main>
    <div class="container contact-container">
        <div class="row">
            <div class="col-md-6 col-12 contact-links">
                <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                <i class="fa fa-codepen fa-3x" aria-hidden="true"></i>
                <i class="fa fa-paperclip fa-3x" aria-hidden="true"></i>
                <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
            </div>
            <div class="col-md-6 col-12 contact-map">
                <div id="map">
                </div>
            </div>
        </div>
    </div>
</main>
<script src="<?php echo BASE_URL; ?>assets/js/scriptmap.js"></script>
<?php require_once('views/templates/footer.php');
