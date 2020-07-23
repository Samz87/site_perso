<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<main>
    <button class="nav-link" onclick="window.location.href='<?php echo BASE_URL ?>admin/articles'">Gestion des articles</button>
    <button class="nav-link" onclick="window.location.href='<?php echo BASE_URL ?>admin/addarticle'">Ajouter un article</button>
</main>

<?php require_once('views/templates/footer.php'); ?>