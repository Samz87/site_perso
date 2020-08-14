<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<script>
    function tel() {
        document.getElementById('tel').innerHTML = '06-03-49-88-90'
    }
</script>

<main>
    <div class="container contact-container">
        <div class="row">
            <div class="col-md-6 col-12 contact-links">
                <div id="tel" onclick=tel() data-toggle="tooltip" data-placement="top" title="Afficher mon numéro de téléphone">                    
                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                </div>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/Samz87" data-toggle="tooltip" data-placement="top" title="Mon profil GitHub">
                    <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                </a>
                <a href="mailto:sam.montaudon@laposte.net" data-toggle="tooltip" data-placement="top" title="Me contacter par mail">
                    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://codepen.io/MSam-" data-toggle="tooltip" data-placement="top" title="Mon profil CodePen">
                    <i class="fa fa-codepen fa-3x" aria-hidden="true"></i>
                </a>
                <a href="./assets/files/CV.jpg" data-toggle="tooltip" data-placement="top" title="Télécharger mon CV" download>
                    <i class="fa fa-paperclip fa-3x" aria-hidden="true"></i>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sam-montaudon-b6137719b/" data-toggle="tooltip" data-placement="top" title="Trouvez-moi sur LinkedIn">
                    <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-md-6 col-12 contact-map">
                <div id="map" data-toggle="tooltip" data-placement="top" title="Mobilité géographique">
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?php echo BASE_URL; ?>assets/js/scriptmap.js"></script>
<?php require_once('views/templates/footer.php');
