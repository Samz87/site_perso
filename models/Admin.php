<?php

require_once('models/Bdd.php');
class Admin
{

    public static function AdminLogin($params)
    {
        $bdd        = new Database();
        $connection = $bdd->getConnection();

        $result = $connection->prepare('SELECT * FROM admin WHERE mail = :mail AND pw = :pw');
        $result->execute($params);

        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function AdminCreate($params)
    {
        $bdd        = new Database();
        $connection = $bdd->getConnection();


        $result = $connection->prepare("INSERT INTO admin (mail, pw) VALUES (:mail, :pw)");
        $result->execute($params);
   
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }
}
