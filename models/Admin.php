<?php

class Admin
{
    public function connexionAdmin($connection, $email, $password)
    {
        $req = $connection->prepare("INSERT INTO admin (mail, pw) VALUES(:mail, :pw)");
        $req->execute(array(
            'mail' => $email,
            'pw' => $password
        ));
    }
    public function inscriptionAdmin($mailconnect, $mdpconnect)
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();


        $mdpconnect = password_hash($mdpconnect, PASSWORD_DEFAULT);

        $req = $connection->prepare("INSERT INTO admin (email, motdepasse, nom) VALUES(:email, :motdepasse, :nom)");
        $req->execute(array(
            'email' => $mailconnect,
            'motdepasse' => $mdpconnect,
            'nom' => 'Bruno'

        ));
    }
}
