<?php

    if( isset($_POST["pseudo"])) {
        extract($_POST);
        $image= $_FILES["image"]['name'];
        $image_temp= $_FILES["image"]['tmp_name'];
        move_uploaded_file($image_temp, "../images/$image");

        $query="INSERT INTO user(
            pseudo,nom,prenom,password,image,email,role,salt
        ) VALUES(
            :pseudo,:nom,:prenom,:password,:image,:email,:role,''
        )";
        simpleQuery($query, [
            ":pseudo"=>$pseudo,
            ":nom"=>$nom,
            ":prenom"=>$prenom,
            ":password"=>$password,
            ":image"=>$image,
            ":email"=>$email,
            ":role"=>$role,
        ]);
        echo "<h2 style='color:green;'>L'utilisateur a bien été créé</h2>";
    }
?>




<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="titre">Pseudo</label>
        <input type="text" class="form-control" name="pseudo">
    </div>

    <div class="form-group">
        <label for="auteur">Nom</label>
        <input type="text" class="form-control" name="nom">
    </div>


    <div class="form-group">
        <label for="status">Prenom</label>
        <input type="text" class="form-control" name="prenom">
    </div>
    <div class="form-group">
        <label for="tags">Mot de passe</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="description">email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="image">image de profile</label>
        <input type="file" name="image">
    </div>

    <select name="role">
        <option value="admin">Admin</option>
        <option value="membre">Membre</option>
    </select>

    <button type="submit" class="btn btn-primary" name="add">Envoyer</button>

</form>