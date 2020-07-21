<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developpy</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets\css\style.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
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
                <h1>Titre de la page</h1>
            </div>
            <div class="header-col col-sm-4 col-xs-12">
                <nav class="nav justify-content-end">
                    <!-- alignement droite -->
                    <a class="nav-link active" href="<?php echo BASE_URL ?>about">A propos</a>
                    <a class="nav-link" href="<?php echo BASE_URL ?>objectives">Objectifs</a>
                    <a class="nav-link" href="<?php echo BASE_URL ?>blog">Actualités</a>
                    <a class="nav-link" href="<?php echo BASE_URL ?>contact">Contact</a>
                </nav>
            </div>
        </div>
    </header>
</body>

<script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>