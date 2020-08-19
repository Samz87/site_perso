<?php 
function indexAction () {
    session_start();
    $pagetitle="Me contacter";
    require ('views/contact/index.php');
}