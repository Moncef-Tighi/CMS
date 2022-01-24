<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="menu">
                <div >
                <a href="/index.php">Accueil</a>
                |
                <a href="/admin/" style="color:#337ab7" >Admin</a>
                </div>
                    <?php
                    if (isset($_SESSION["pseudo"])) {
                ?>
                    <h4 id="welcome">Bienvenue <?php echo $_SESSION["pseudo"]?></h4>
                    <a href="includes/logout.php" id="deco">Déconnexion</a>
                    
                <?php } else {
                    ?>
                        <div>
                            <a href="connexion.php">Se connecter</a>
                            |
                            <a href="inscription.php">S'inscrire</a>
                        </div>
                <?php }?>

            </div>
        <!-- /.container -->
    </nav>
