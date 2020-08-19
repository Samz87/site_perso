<?php
$pagetitle="Connexion admin";
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="post">
                    <div class="form-group">
                        <label for="mail">Adresse email</label>
                        <input type="text" name="mail" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="pw">Mot de passe</label>
                        <input type="password" class="form-control" name="pw" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary" value="Connexion" name="adminconnect">Connexion</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once('views/templates/footer.php');