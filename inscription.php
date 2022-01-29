<?php 
    require("./includes/database.php");
    include("./includes/querry.php");
    include("./includes/header.php");

if (isset($_POST["login"])) {
    extract($_POST);
    $password=crypt($password,$pseudo);
    $query="INSERT INTO 
    user(pseudo,nom,prenom,password,email,image,role,salt) 
    VALUES(:pseudo,:nom,:prenom,:password,:email,'default.jpg','admin')";
    simpleQuery($query, [":pseudo"=>$pseudo,":nom"=>$nom,":prenom"=>$prenom,":password"=>$password,":email"=>$email,]);
    echo("<h2 style='color:green'>Votre compte a bien été créé, vous pouvez désormais vous connecter</h2>");
}

?>
    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    

    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">

                <h1>S'inscrire</h1><br>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Entrez un pseudo">
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez un nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrez un prenom">
                        </div>

                         <div class="form-group">
                            <label for="email" >Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="test@exemple.com">
                        </div>
                         <div class="form-group">
                            <label for="password" >Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="mot de passe" >
                        </div>
                
                        <input type="submit" name="login" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Connexion" >
                    </form>
                 
                </div>
            </div> 
        </div> 
    </div> 
</section>


        <hr>



<?php include "includes/footer.php";?>
