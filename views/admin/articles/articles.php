<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Img_alt</th>
                <th>Contenu</th>
                <th>Lien</th>
                <th>Date de creation</th>
                <th>Categorie</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?php echo $article['id']; ?></td>
                    <td><?php echo $article['title']; ?></td>
                    <td><?php echo $article['img']; ?></td>
                    <td><?php echo $article['img_alt']; ?></td>
                    <td><?php echo $article['content']; ?></td>
                    <td><?php echo $article['link']; ?></td>
                    <td><?php echo $article['dateCreation']; ?></td>
                    <td><?php echo $article['categorie']; ?></td>

                    <td><a href="<?php echo BASE_URL; ?>admin/editarticle/<?php echo $article['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a class="a-beware" href="<?php echo BASE_URL; ?>admin/deletearticle/<?php echo $article['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="7">
                    <a class="button" href="<?php echo BASE_URL; ?>admin/addarticle/"><i class="fas fa-plus"></i> Ajouter un projet</a>
                </th>
            </tr>
        </tfoot>
    </table>
</div>

<?php require("views/templates/footer.php"); ?>