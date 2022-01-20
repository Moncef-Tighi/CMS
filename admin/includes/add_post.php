<?php

    if( isset($_POST["titre"])) {
        extract($_POST);
        $image= $_FILES["image"]['name'];
        $image_temp= $_FILES["image"]['tmp_name'];
        move_uploaded_file($image_temp, "../images/$image");
        $date=date('Y-m-d');

        $query="INSERT INTO posts(
            categorie_id,titre,auteur,date_post,image,description,tags,nombre_commentaire,status
        ) VALUES(
            :categorie_id,:titre,:auteur,:date,:image,:description,:tags, 0 ,:status
        )";
        simpleQuery($query, [
            ":categorie_id"=>$categorie,
            ":titre"=>$titre,
            ":auteur"=>$auteur,
            ":date"=>$date,
            ":image"=>$image,
            ":description"=>$description,
            ":tags"=>$tags,
            ":status"=>$status,
        ]);
    }
?>




<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="titre">Titre du post</label>
        <input type="text" class="form-control" name="titre">
    </div>
    <div class="form-group">
        <label for="categorie">id catégorie</label>
        <input type="text" class="form-control" name="categorie">
    </div>

    <div class="form-group">
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" name="auteur">
    </div>


    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" name="status">
    </div>
    <div class="form-group">
        <label for="tags">tags</label>
        <input type="text" class="form-control" name="tags">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea type="text" class="form-control" name="description" cols="40" rows="8"></textarea>
    </div>

    <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image">
    </div>

    <button type="submit" class="btn btn-primary" name="add">Envoyer</button>

</form>