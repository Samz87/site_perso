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
                <a href="tel:+33603498890"><i class="fa fa-phone fa-3x" aria-hidden="true"></i></a>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/Samz87"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
                <a href="mailto:sam.montaudon@laposte.net"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></a>
                <a target="_blank" rel="noopener noreferrer" href="https://codepen.io/MSam-"><i class="fa fa-codepen fa-3x" aria-hidden="true"></i></a>
                <a href="./assets/files/CV.jpg" download><i class="fa fa-paperclip fa-3x" aria-hidden="true"></i></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sam-montaudon-b6137719b/"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a>
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
