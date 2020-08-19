<?php 
function indexAction () {
    session_start();
    $pagetitle="Page d'accueil";
    require ('views/homepage/index.php');
}