<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developpy</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets\css\style.min.css">
    <link rel="stylesheet" href="ht-tps://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <div class="header-col col-sm-4 col-xs-12 id-container">
                <a href="<?php echo BASE_URL ?>">
                    <img src="https://placehold.it/80x80" alt="">
                </a>
                <h2 class="justify-content-md-start justify-content-center">Developpy</h2>
            </div>
            <div class="header-col col-sm-4 col-xs-12 d-flex justify-content-center">
                <h1><?php echo $pagetitle ?></h1>
            </div>
            <div class="header-col col-sm-4 col-xs-12">
                <nav class="nav justify-content-end">
                    <!-- alignement droite -->
                    <button class="nav-link" onclick="window.location.href='<?php echo BASE_URL ?>about'">A propos</button>
                    <button class="nav-link" onclick="window.location.href='<?php echo BASE_URL ?>objectives'">Objectifs</button>
                    <button class="nav-link" onclick="window.location.href='<?php echo BASE_URL ?>blog'">Actualités</button>
                    <button class="nav-link" onclick="window.location.href='<?php echo BASE_URL ?>contact'">Contact</button>
                </nav>
            </div>
        </div>
    </header>


    