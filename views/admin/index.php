<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<main>
    
</main>

<?php require_once('views/templates/footer.php'); ?>