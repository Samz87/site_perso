<?php
session_start();
require_once( 'models/Admin.php' );

function isLogged(){
    if( ! isset( $_SESSION['isLogged'] ) ) {
        Header( 'Location: ' . BASE_URL . 'admin/connect' );
    }
}

function indexAction(){
    isLogged();
    
    $pageTitle = 'Tableau de bord';
    require( 'views/admin/index.php' );
}

function connectAction(){
    if( isset( $_POST['adminconnect'] ) ) {
        $mail    = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['pw']);

        $params = [
            'mail'     => $mail,
            'pw' => $password,
        ];

        $result      = Admin::AdminCreate( $params );

        if( $result ) {
            $_SESSION['isLogged'] = $result['id']; // session creation
        };

        Header( 'Location: ' . BASE_URL . '' );
    }

    $pagetitle = 'Tableau de bord';
    require_once( 'views/admin/login.php' );
}

function logoutAction(){
    session_destroy();
    Header( 'Location: ' . BASE_URL . '' );
}


// Gestion portfolio/project

function projectsAction(){
    isLogged();

    $projects      = Project::getProjects();

    $pageTitle = 'Gestion des Projets';
    require( 'views/love/projects/projects.php' );
}

function addprojectAction(){
    isLogged();
    
    if( isset( $_POST['addproject'] ) ) {

        $name = htmlspecialchars( $_POST['name'] );
        $img = htmlspecialchars( $_POST['img'] );
        $txt = htmlspecialchars( $_POST['txt'] );
        $link = htmlspecialchars( $_POST['link'] );

        $params = array(
            'name' => $name,
            'img' => $img,
            'txt' => $txt,
            'link' => $link,
        );

        Project::addProject( $params );
        
        Header( 'Location: ' . BASE_URL . 'love/projects/projects' );
    }
    
    $pageTitle = 'Ajouter un projet';
    require( 'views/love/projects/addproject.php' );
}

function editprojectAction(){
    isLogged();

    $requestUri = str_replace( BASE_URL, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $projectId = isset( $requestParams[2] ) ? $requestParams[2] : null;

    $project = Project::getProject( $projectId );

    if( isset( $_POST['editproject'] ) ) {

        $name = htmlspecialchars( $_POST['name'] );
        $img = htmlspecialchars( $_POST['img'] );
        $txt = htmlspecialchars( $_POST['txt'] );
        $link = htmlspecialchars( $_POST['link'] );

        $params = array(
            'name' => $name,
            'img' => $img,
            'txt' => $txt,
            'link' => $link,
        );

        Project::editProject( $projectId, $params );
        header( 'Location: ' . BASE_URL . 'love/projects/projects' . $project['id'] . '' );
    }

    $pageTitle = 'Modifier le projet "' . $project['name'] . '"';
    require( 'views/love/projects/editproject.php' );
}

function deleteprojectAction(){
    isLogged();

    $requestUri    = str_replace( BASE_URL, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $projectId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    Project::deleteProject( $projectId );

    Header( 'Location: ' . BASE_URL . 'love/projects' );

}


