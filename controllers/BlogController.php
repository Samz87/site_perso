<?php 
require_once('models/Bdd.php');
require_once('models/Admin.php');
require_once('models/Blog.php');

function indexAction () {
    session_start();
    $pagetitle="Actualités";
    $articles     = Articles::getArticles();
    require ('views/blog/index.php');
}