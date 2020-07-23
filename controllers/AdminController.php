<?php
session_start();
require_once( 'models/Admin.php' );

function isLogged(){
    if( ! isset( $_SESSION['isLogged'] ) ) {
        Header( 'Location: ' . BASE_URL . 'admin/login' );
    } 
}

function indexAction(){
    isLogged();
    
    $pagetitle = 'Tableau de bord';
    require( 'views/admin/index.php' );
}

function registerAction(){
    if( isset( $_POST['adminconnect'] ) ) {
        $mail    = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['pw']);

        $params = [
            'mail'     => $mail,
            'pw' => $password,
        ];

        $result      = Admin::AdminCreate( $params );

        Header( 'Location: ' . BASE_URL . '' );
    }

    $pagetitle = 'Tableau de bord';
    require_once( 'views/admin/login.php' );
}

function loginAction(){
    if( isset( $_POST['adminconnect'] ) ) {
        $mail    = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['pw']);

        $params = [
            'mail'     => $mail,
            'pw' => $password,
        ];

        $result      = Admin::AdminLogin( $params );

        if( $result ) {
            $_SESSION['isLogged'] = $result['id']; // session creation
        };

        Header( 'Location: ' . BASE_URL . 'admin' );
    }

    require_once( 'views/admin/login.php' );
}

function logoutAction(){
    session_destroy();
    Header( 'Location: ' . BASE_URL . '' );
}