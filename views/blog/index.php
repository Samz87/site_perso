<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>
<main>
    <div class="row blog">

        <div class="col">
            <h2>Mes projets</h2>

            <div id="slider">
                <button class="prev sliderbutton">&lt;</button>
                <?php while ($article = $articles->fetch(PDO::FETCH_BOTH)) { ?>
                    <div class="slide">
                    <img src="<?php echo BASE_URL . $article['img'] ?>" alt="<?php echo $article['img_alt'] ?>" />
                    <h1><?php echo $article['title'] ?></h1>
                    <p>
                        <?php $article['content'] ?>
                    </p>
                    </div>
                <?php } ?>
                <button class="next sliderbutton">&gt;</button>                    

                <hr>

                <div class="col">
                    <h2>Veille technologique</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, laboriosam amet ducimus at molestias, consectetur doloremque corporis voluptate non iste nemo velit! Tempore quidem quo vero ratione nam, nisi odio, obcaecati aliquam maiores expedita, earum quam non saepe recusandae ea?</p>
                </div>

            </div>
</main>

<?php require_once('views/templates/footer.php');
