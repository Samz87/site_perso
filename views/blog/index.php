<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>
<main>
    <div class="row blog">
        <div class="col-12">
            <h2>Mes projets</h2>
            <div class="slider">
                <?php while ($proj = $projs->fetch(PDO::FETCH_BOTH)) { ?>
                    <?php if($proj['categorie'] == 'Projets') { ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo BASE_URL . $proj['img'] ?>" alt="<?php echo $proj['img_alt'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $proj['title'] ?></h5>
                                <h6 class="card-date text-muted"><?php echo $proj['dateCreation'] ?></h6>
                                <p class="card-text"><?php echo $proj['content'] ?></p>
                                <a href="https://<?php echo $proj['link'] ?>" class="btn btn-primary">Visiter le site</a>
                            </div>
                        </div>
                <?php }}; ?>
            </div>
        </div>
        <div class="col-12">
            <h2>Veilles technologiques</h2>
            <div class="slider">
                <?php while ($article = $articles->fetch(PDO::FETCH_BOTH)) { ?>
                    <?php if ($article['categorie'] == 'Articles') { ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo BASE_URL . $article['img'] ?>" alt="<?php echo $article['img_alt'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $article['title'] ?></h5>
                                <h6 class="card-date text-muted"><?php echo $article['dateCreation'] ?></h6>
                                <p class="card-text"><?php echo $article['content'] ?></p>
                                <a href="https://<?php echo $article['link'] ?>" class="btn btn-primary">Visiter le site</a>
                            </div>
                        </div>
                <?php }}; ?>
            </div>
        </div>
    </div>
</main>

<?php require_once('views/templates/footer.php'); ?>