<?php 
function indexAction () {
    session_start();
    $pagetitle="Objectifs";
    require ('views/objectives/index.php');
}