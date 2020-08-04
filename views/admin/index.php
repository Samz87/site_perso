<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<main>

    <div class="container">
        <div class="row admin_buttons">
            <div class="col-4 cockpit" onclick="window.location.href='<?php echo BASE_URL ?>admin/articles'">
                <h3>
                    Gestion des articles
                </h3>
            </div>
            <div class="col-4 cockpit" onclick="window.location.href='<?php echo BASE_URL ?>admin/addarticle'">
                <h3>
                    Créer un article
                </h3>
            </div>
        </div>
    </div>


</main>


<?php require_once('views/templates/footer.php'); ?>