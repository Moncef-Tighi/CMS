<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Auteur</th>
            <th>Email</th>
            <th>Status</th>
            <th>En réponse à</th>
            <th>Date</th>
            <th>commentaire</th>
            <th>Valider</th>
            <th>Invalider</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query="SELECT * FROM users";
        $data=fetchAll($query);
        foreach($data as $row) {
            extract($row);
        ?>
        <tr>
            <td><?php echo $commentaire_id ?></td>
            <td><?php echo $auteur ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $status ?></td>
            <?php 
                $query="SELECT titre FROM posts WHERE post_id = :post_id";
                $titre=fetchOne($query, [':post_id'=> $post_id]);
            ?>
            <td><a href="/post.php?id=<?php echo $post_id ?>"><?php echo  substr($titre["titre"], 0, 200); ?></a></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $contenu;?></td>
            <td><a href="commentaires.php?valider=<?php echo $commentaire_id; ?>">Valider</a></td>
            <td><a href="commentaires.php?invalider=<?php echo $commentaire_id; ?>">Invalider</a></td>
            <td>
                <a href='commentaires.php?delete=<?php echo $commentaire_id; ?>'>
                <img class='btn-actions' src='../images/supprimer.svg' alt='Supprimer'></a>
            </td>
        </tr>

        <?php } ?>
    </tbody>
</table>
