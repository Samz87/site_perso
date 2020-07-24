<?php
session_start();
require_once('models/Admin.php');
require_once('models/Blog.php');

function isLogged()
{
    if (!isset($_SESSION['isLogged'])) {
        Header('Location: ' . BASE_URL . 'admin/login');
    }
}

function indexAction()
{
    isLogged();

    $pagetitle = 'Tableau de bord';
    require('views/admin/index.php');
}

function registerAction()
{
    if (isset($_POST['adminconnect'])) {
        $mail    = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['pw']);

        $params = [
            'mail'     => $mail,
            'pw' => $password,
        ];

        $result      = Admin::AdminCreate($params);

        Header('Location: ' . BASE_URL . '');
    }

    $pagetitle = 'Tableau de bord';
    require_once('views/admin/login.php');
}

function loginAction()
{
    if (isset($_POST['adminconnect'])) {
        $mail    = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['pw']);

        $params = [
            'mail'     => $mail,
            'pw' => $password,
        ];

        $result      = Admin::AdminLogin($params);

        if ($result) {
            $_SESSION['isLogged'] = $result['id']; // session creation
        };
        session_start();
        Header('Location: ' . BASE_URL . 'admin');
    }

    require_once('views/admin/login.php');
}

function logoutAction()
{
    session_destroy();
    Header('Location: ' . BASE_URL . '');
}

// Modification des articles 

function articlesAction()
{
    isLogged();
    $pagetitle = 'Gestion des Articles';
    $articles      = Articles::getArticles();


    require('views/admin/articles/articles.php');
}

function addarticleAction()
{
    isLogged();
    $pagetitle = 'Ajouter un article';
    if (isset($_POST['addarticle'])) {

        $title = htmlspecialchars($_POST['title']);
        $img_alt = htmlspecialchars($_POST['img_alt']);
        $content = htmlspecialchars($_POST['content']);
        $link = htmlspecialchars($_POST['link']);
        $dateCreation = date('Y-m-d H:i:s');
        $categorie = htmlspecialchars($_POST['categorie']);

        $target_dir = "assets/img_articles/";
        $target_file = $target_dir . basename($_FILES['img']["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if ($imageFileType == "jpg" or $imageFileType == "png" or $imageFileType == "jpeg" and $_FILES["photoplat"]["size"] > 1000000) {
            $params = array(
                'title' => $title,
                'img' => $target_file,
                'img_alt' => $img_alt,
                'content' => $content,
                'link' => $link,
                'dateCreation' => $dateCreation,
                'categorie' => $categorie,
            );
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            Articles::addArticle($params);
        } else {
            echo "Erreur";
        }

        Header('Location: ' . BASE_URL . 'admin/articles/articles');
    }

    $pagetitle = 'Ajouter un article';
    require('views/admin/articles/addarticle.php');
}

function editarticleAction()
{
    isLogged();
    $pagetitle = 'Modifier un article';
    $requestUri = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $articleId = isset($requestParams[2]) ? $requestParams[2] : null;
    
    $article = Articles::getArticle($articleId);

    if (isset($_POST['editarticle'])) {

        $title = htmlspecialchars($_POST['title']);
        $img = htmlspecialchars($_POST['img']);
        $img_alt = htmlspecialchars($_POST['img_alt']);
        $content = htmlspecialchars($_POST['content']);
        $link = htmlspecialchars($_POST['link']);
        $categorie = htmlspecialchars($_POST['categorie']);

        $params = array(
            'title' => $title,
            'img' => $img,
            'img_alt' => $img_alt,
            'content' => $content,
            'link' => $link,
            'categorie' => $categorie,
        );

        Articles::editArticle($articleId, $params);
        header('Location: ' . BASE_URL . 'admin/articles/articles' . $article['id'] . '');
    }

    $pagetitle = 'Modifier "' . $article['title'] . '"';
    require('views/admin/articles/editarticle.php');
}

function deletearticleAction()
{
    isLogged();
    $pagetitle = 'Supprimer un article';
    $requestUri    = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $articleId     = isset($requestParams[2]) ? $requestParams[2] : null;

    Articles::deleteArticle($articleId);

    Header('Location: ' . BASE_URL . 'admin/articles');
}
