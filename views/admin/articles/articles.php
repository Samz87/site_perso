<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Descripion image</th>
                            <th>Contenu</th>
                            <th>Lien</th>
                            <th>Date de creation</th>
                            <th>Categorie</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($articles as $article) : ?>
                            <tr>
                                <td id="id"><?php echo $article['id']; ?></td>
                                <td><?php echo $article['title']; ?></td>
                                <td><?php echo $article['img']; ?></td>
                                <td><?php echo $article['img_alt']; ?></td>
                                <td><?php echo substr($article['content'], 0, 40); ?> [...] </td>
                                <td><?php echo $article['link']; ?></td>
                                <td><?php echo $article['dateCreation']; ?></td>
                                <td><?php echo $article['categorie']; ?></td>

                                <td>
                                    <a href="<?php echo BASE_URL; ?>admin/editarticle/<?php echo $article['id']; ?>"><i class="fas fa-edit"></i></a>
                                    <a class="a-beware" href="<?php echo BASE_URL; ?>admin/deletearticle/<?php echo $article['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th colspan="9">
                                <a class="button" href="<?php echo BASE_URL; ?>admin/addarticle/"><i class="fas fa-plus"></i> Ajouter</a> 
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require("views/templates/footer.php"); ?>