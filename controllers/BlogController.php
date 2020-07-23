<?php 
function indexAction () {
    session_start();
    $pagetitle="Actualités";
    require ('views/blog/index.php');
}