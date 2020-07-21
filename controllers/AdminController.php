<?php
function loginAction()
{
    require('views/admin/login.php');
}

function indexAction()
{
    $pagetitle="BackOffice";
    if (isset($_SESSION)) {
        require('views/admin/index.php');
    } else {
        echo "vous n'avez pas acces a cette page";
    }
}
