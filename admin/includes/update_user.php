<form action="" method="post" enctype="multipart/form-data">
    <?php
    if (isset($_GET["id"])) {
        $query="SELECT * FROM user WHERE user_id= :id ";
        $data=fetchOne($query, [':id'=> $_GET['id']]);
        extract($data);

    }

    if (isset($_POST['pseudo'])) {
        if ($_POST["password"]!="") {
            $query="UPDATE user SET
            pseudo =  :pseudo , nom = :nom , prenom= :prenom ,
            password = :password ,
            email = :email ,role = :role
            WHERE user_id= :id ";
            
            extract($_POST);
            $password=crypt($password,$pseudo);

            simpleQuery($query, [
                ":pseudo"=>$pseudo,
                ":nom"=>$nom,
                ":prenom"=>$prenom,
                ":password"=>$password,
                ":email"=>$email,
                ":role"=>$role,
                ":id" =>$_GET["id"]
            ]);
        } else {
            echo "<h2> Une erreur s'est produite, veuillez réessayer</h2>";
        }
    } 

    ?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="titre">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" value="<?php echo $pseudo ?>">
    </div>

    <div class="form-group">
        <label for="auteur">Nom</label>
        <input type="text" class="form-control" name="nom"  value="<?php echo $nom ?>">
    </div>


    <div class="form-group">
        <label for="status">Prenom</label>
        <input type="text" class="form-control" name="prenom"  value="<?php echo $prenom ?>">
    </div>
    <div class="form-group">
        <label for="tags">Mot de passe</label>
        <input type="password" class="form-control" name="password" >
    </div>
    <div class="form-group">
        <label for="description">email</label>
        <input type="email" class="form-control" name="email"  value="<?php echo $email ?>">
    </div>

    <select name="role">
        <option value="admin" <?php if ($role==="admin") echo "selected"?> >Admin</option>
        <option value="membre" <?php if ($role==="membre") echo "selected"?>>Membre</option>
    </select>

    <br><br>
    
    <button type="submit" class="btn btn-primary" name="add">Envoyer</button>

</form>