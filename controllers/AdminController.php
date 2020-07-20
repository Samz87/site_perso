<?php
spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});

function signupAction()
{
    if (isset($_POST['formconnect'])) {
        $bdd        = new Bdd();
        $connexion = $bdd->getConnection();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $admin = new Admin();
        $admin->connexionAdmin($connexion, $email, $password);
    }
    require "views/admin/index.php";
}
