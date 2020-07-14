<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developpy</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet">
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

</html>