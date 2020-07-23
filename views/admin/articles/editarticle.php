<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<form method="post">
    <div class="form_row">
        <input type="text" name="title" id="title" value="<?php echo $article['title']; ?>" required />
        <label for="name">Nom :</label>
    </div>
    <div class="form_row">
        <input type="file" name="img" id="img" />
        <label for="img">Image :</label>
    </div>
    <div class="form_row">
        <input type="text" name="img_alt" id="img_alt" value="<?php echo $article['img_alt']; ?>" />
        <label for="img_alt">Description de l'image :</label>
    </div>
    <div class="form_row">
        <textarea type="text" name="content" id="content" required><?php echo $article['content']; ?></textarea>
        <label for="content">Contenu :</label>
    </div>
    <div class="form_row">
        <input type="text" name="link" id="link" value="<?php echo $article['link']; ?>" />
        <label for="link">URL :</label>
    </div>
    <div class="form_row">
        <input type="text" name="categorie" id="categorie" value="<?php echo $article['categorie']; ?>" />
        <label for="categorie">Categorie :</label>
    </div>
    <div class="form_row_centered">
        <a class="button" href="<?php echo BASE_URL;?>admin/articles">Retour</a>
        <input class="button" type="submit" value="Modifier" name="editarticle"/>
    </div>
</form>

<?php require("views/templates/footer.php");?>