<?php
require_once( 'models/Blog.php' );

// this model is used for create/edit/delete projects visible at "portfolio/portfolio.php"
class Articles {
    
    public static $connection;

    public static function BddConnect()
    {
        if (!isset($connection)) { 
            $bdd = new Database();
            self::$connection = $bdd->getConnection();
        }
    }

    public static function getArticles()
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM articles ORDER BY id ASC');
        return $result; 
    }

    public static function getArticle($articleId)
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM articles where id = ' . $articleId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function addArticle( $params )
    {
        self::BddConnect();
        $result = self::$connection->prepare( 'INSERT INTO articles (title, img, img_alt, content, dateCreation, link, categorie, id_admin ) VALUES (:title, :img, :img_alt, :content, :dateCreation, :link, :categorie, 1 )' );
        $result->execute( $params );
    } 

    public static function editArticle($articleId, $params)
    {
        self::BddConnect();
        $result = self::$connection->prepare("UPDATE articles SET title = :title , img = :img , img_alt= :img_alt, content = :content, link = :link, categorie = :categorie where id = $articleId");
        $result -> execute($params);
    }

    public static function deleteArticle( $articleId )
    {
        self::BddConnect();

        $result = self::$connection->prepare( 'DELETE FROM articles WHERE id = :id' );
        $result->execute( array(
            'id' => $articleId,
        ) );
    }
}