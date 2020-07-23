<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<main>
    <p>Blog</p>
</main>

<?php require_once('views/templates/footer.php');
