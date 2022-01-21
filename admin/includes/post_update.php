<form action="" method="post" enctype="multipart/form-data">
    <?php
    if (isset($_GET["id"])) {
        $query="SELECT * FROM posts WHERE post_id= :id ";
        $data=fetchOne($query, [':id'=> $_GET['id']]);
        extract($data);

    }

    if (isset($_POST['titre'])) {
        $query="UPDATE posts SET
            categorie_id =  :categorie , titre = :titre , 
            auteur = :auteur , description = :description ,
            tags = :tags ,status = :status
            WHERE post_id= :id ";

        extract($_POST);
        simpleQuery($query, [
            ":categorie"=>$categorie,
            ":titre"=>$titre,
            ":auteur"=>$auteur,
            ":description"=>$description,
            ":tags"=>$tags,
            ":status"=>$status,
            ":id" => $_GET["id"],
        ]);
    }

    ?>

    <div class="form-group">
        <label for="titre">Titre du post</label>
        <input type="text" class="form-control" name="titre" value="<?php echo $titre ?>">
    </div>
    <div class="form-group">
        <label for="categorie">Categorie</label>
        <br>
        <select name="categorie" id="">
            <?php
                $query="SELECT * FROM categorie";
                $data=fetchAll($query);
                foreach($data as $row) {
                    $id=$row["categorie_id"];
                    $titre=$row["categorie_titre"];
            ?>
            <option value="<?php echo $id ?>" <?php if ($id===$categorie_id) echo "selected"?>><?php echo $titre?></option>
            <?php }?>
        </select>
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

    <button type="submit" class="btn btn-primary" name="add">Envoyer</button>

</form>