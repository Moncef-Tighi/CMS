<?php 
    require("./includes/database.php");
    include("./includes/querry.php");
    include("./includes/header.php");
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

                <h1>Se connecter</h1><br>
                    <form role="form" action="./includes/login.php" method="post" id="login" autocomplete="off">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Entrez un pseudo">
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
