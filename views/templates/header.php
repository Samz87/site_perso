<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developpy</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets\css\style.min.css">
</head>

<body>
    <header>
        <div class="id_container">
            <a href="<?php echo BASE_URL; ?>">
                <img src="http://placehold.it/80x80" alt="">
            </a>
            <h1>Developpy</h1>
        </div>
        <div class="title_container">
        </div>
        <div class="btn_container">
            <button onclick="window.location.href = '<?php echo BASE_URL; ?>about'">A propos de moi</button>
            <button onclick="window.location.href = '<?php echo BASE_URL; ?>objectives'">Objectifs</button>
            <button onclick="window.location.href = '<?php echo BASE_URL; ?>blog'">Actualités</button>
            <button onclick="window.location.href = '<?php echo BASE_URL; ?>contact'">Me contacter</button>
        </div>
    </header>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>