<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>Status</th>
            <th>Lien de l'image</th>
            <th>Tags</th>
            <th>Date</th>
            <th>Commentaires</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query="SELECT * FROM posts";
        $data=fetchAll($query);
        foreach($data as $row) {
            extract($row);
        ?>
        <tr>
            <td><?php echo $post_id ?></td>
            <td><?php echo $auteur ?></td>
            <td><?php echo $titre ?></td>
            <td><?php echo $categorie_id ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo $image;?></td>
            <td><?php echo $tags; ?></td>
            <td><?php echo $date_post ?></td>
            <td><?php echo $nombre_commentaire; ?></td>
            <td><a href='post.php?source=update&id=<?php echo $post_id; ?>'>
                <img class='btn-actions' src='../images/editer.svg' alt='Editer'></a>
                <a href='post.php?delete=<?php echo $post_id; ?>'>
                <img class='btn-actions' src='../images/supprimer.svg' alt='Supprimer'></a>
            </td>
        </tr>

        <?php } ?>
    </tbody>
</table>
