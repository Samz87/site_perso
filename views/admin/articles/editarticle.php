<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="article_form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $article['title']; ?>" placeholder="Titre de l'article">
                    </div>
                    <div class="form-group">
                        <div>
                            <img src="<?php echo BASE_URL . $article['img']?>" alt="<?php echo $article['img_alt']?>" >
                        </div>
                        <input type="file" class="form-control" id="img" name="img" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="img_alt" name="img_alt" placeholder="Description de l'image" value="<?php echo $article['img_alt']; ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="text" class="form-control" id="content" rows="3" name="content" placeholder="Contenu"><?php echo $article['content']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="link" name="link" placeholder="Url" value="<?php echo $article['link']; ?>">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="categorie" name="categorie" value="<?php echo $article['categorie']; ?>">
                        <option selected disabled hidden>Catégorie</option>
                            <option>Articles</option>
                            <option>Projets</option>
                        </select>
                    </div>
                    <div class="form_group buttons ">
                        <a class="col-3 button" href="<?php echo BASE_URL; ?>admin/articles">Retour</a>
                        <input class="col-3 button" type="submit" id="add" value="Modifier" name="editarticle" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


<?php require("views/templates/footer.php"); ?>