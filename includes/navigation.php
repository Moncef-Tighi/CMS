<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="menu">
            <?php if (isset($_SESSION["pseudo"])) {?>
                    <h4 id="welcome">Bienvenue <?php echo $_SESSION["pseudo"]?></h4>
                <?php } ?>
                <a href="/index.php">Accueil</a>
                    <a href="/admin/" style="color:#337ab7" >Admin</a>
                    <?php
                    if (isset($_SESSION["pseudo"])) {
                ?>
                    <a href="includes/logout.php" id="deco">Déconnexion</a>
                    
                <?php } else {
                    ?>
                    
                        <a href="connexion.php">Se connecter</a>
                        <a href="inscription.php">S'inscrire</a>
                    
                <?php }?>

            </div>
        <!-- /.container -->
    </nav>
