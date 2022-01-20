<form action="" method="post" enctype="multipart/form-data">
    <?php
    if (isset($_GET["id"])) {
        $query="SELECT * FROM posts WHERE post_id= :id ";
        $data=fetchOne($query, [':id'=> $_GET['id']]);
        extract($data);

    }
    ?>

    <div class="form-group">
        <label for="titre">Titre du post</label>
        <input type="text" class="form-control" name="titre" value="<?php echo $titre ?>">
    </div>
    <div class="form-group">
        <label for="categorie">id catégorie</label>
        <input type="text" class="form-control" name="categorie" value="<?php echo $categorie_id ?>">
    </div>

    <div class="form-group">
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" name="auteur" value="<?php echo $auteur ?>">
    </div>


    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" name="status" value="<?php echo $status ?>">
    </div>
    <div class="form-group">
        <label for="tags">tags</label>
        <input type="text" class="form-control" name="tags" value="<?php echo $tags ?>">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea type="text" class="form-control" name="description" cols="40" rows="8"><?php echo $description ?></textarea>
    </div>

    <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image">
    </div>

    <button type="submit" class="btn btn-primary" name="add">Envoyer</button>

</form>