<?php 
require("./includes/database.php");
include("./includes/querry.php");
include("./includes/header.php");

?>

<body>

    <!-- Navigation -->

    <?php
        include("./includes/navigation.php");
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Accueil
                    <small>liste des posts</small>
                </h1>

                <!-- Les blog posts -->
                <?php
                    if (isset($_GET["id"])) {
                        $query="SELECT * FROM posts WHERE post_id= :id";
                        $data = fetchAll($query, [":id" => $_GET["id"]]); 
                        foreach($data as $row) {
                            extract($row);
                ?>

                <h2>
                    <a href="#"><?php echo $titre;?></a>
                </h2>
                <p class="lead">
                    Par <a href="index.php"><?php echo $auteur; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posté le : <?php echo $date_post; ?></p>
                <img class="img-responsive" src="/images<?php echo $image; ?>" alt="">
                <p><?php echo $description; ?></p>


                <?php 
                    if(isset($_POST["contenu"])) {
                        $query="INSERT INTO commentaire(post_id,auteur,email,contenu,date) 
                        VALUES (:id, :auteur, :email, :contenu, :date)";
                        $date=date("Y-m-d");
                        extract($_POST);
                        if (empty($auteur) || empty($contenu)) {
                            echo("Erreur, le commentaire est invalide.");
                        } else {
                            simpleQuery($query, 
                            [":id"=> $_GET["id"], ":auteur" => $auteur,
                            ":email" => $email,":contenu" => $contenu, ":date" => $date ] );
                            echo("Votre commentaire a bien été ajouté");    
                        }
                    }
                ?>
                <br>
                        <!-- Comments Form -->
                <div class="well">



                <h4>Laisser un commentaire:</h4>
                <form action="" method="post" role="form">

                    <div class="form-group">
                        <label for="Author">Auteur</label>
                        <input type="text" name="auteur" class="form-control" name="auteur">
                    </div>

                    <div class="form-group">
                        <label for="Author">Email</label>
                        <input type="email" name="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="comment">Votre commentaire</label>
                        <textarea name="contenu" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" name="create_comment" class="btn btn-primary">Confirmer</button>
                </form>
                </div>

                <?php }} else {
                    header("Location: ./");
                }?>
                <!-- Posted Comments -->

                

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <?php
            include("./includes/aside.php");
            ?>

        </div>

        
        <hr>

    <?php
    include("./includes/footer.php");
    ?>

</body>

</html>
