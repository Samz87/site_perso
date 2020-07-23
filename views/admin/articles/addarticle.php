<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<form method="post" enctype="multipart/form-data">
    <div class="form_row">
        <input type="text" name="title" id="title" required />
        <label for="title">Titre :</label>
    </div>
    <div class="form_row">
        <input type="file" name="img" id="img" />
        <label for="img">Image :</label>
    </div>
    <div class="form_row">
        <input type="text" name="img_alt" id="img_alt" />
        <label for="img_alt">Description de l'image :</label>
    </div>
    <div class="form_row">
        <textarea type="text" name="content" id="content" required></textarea>
        <label for="content">Contenu :</label>
    </div>
    <div class="form_row">
        <input type="text" name="link" id="link" />
        <label for="link">URL :</label>
    </div>
    <div class="form_row">
        <input type="text" name="categorie" id="categorie" />
        <label for="categorie">Categorie :</label>
    </div>
    <div class="form_row_centered">
        <a class="button" href="<?php echo BASE_URL;?>admin/articles">Retour</a>
        <input class="button" type="submit" value="Ajouter" name="addarticle"/>
    </div>
</form>

<?php require("views/templates/footer.php");?>