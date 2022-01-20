<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Accueil</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                <?php
                    $db=connexion();
                    $query="SELECT * FROM categorie";
                    $requete=$db->prepare($query);
                    $requete->execute();
                    $data = $requete->fetchAll(); 
                    foreach($data as $row) {
                        $title=$row["categorie_titre"];
                        echo("<li><a href='#'>$title</a></li>");
                    }
                ?>    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
