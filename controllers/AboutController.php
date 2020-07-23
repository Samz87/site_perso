<?php 
function indexAction () {
    session_start();
    $pagetitle="A propos de moi";
    require ('views/about/index.php');
}