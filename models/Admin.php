<?php

require_once('models/Bdd.php');

class Admin
{
    
    public static function AdminCreate($params)
    {
        $bdd        = new Database();
        $connection = $bdd->getConnection();

        $result = $connection->prepare("INSERT INTO admin (mail, pw) VALUES (:mail, :pw)");
        $result->execute($params);
        
    }
    
    public static function AdminLogin($mail)
    {
        $bdd        = new Database();
        $connection = $bdd->getConnection();
        
        $result = $connection->prepare(('SELECT * FROM admin WHERE mail = ?'));
        $result->execute(array($mail));
        

        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

}
