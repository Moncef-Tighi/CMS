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
                    <?php echo $titre;?>
                </h2>
                <p class="lead">
                    Par <a href="index.php"><?php echo $auteur; ?></a>
                </p>
                <?php 
                if (isset($_SESSION["role"]) && $_SESSION["role"]==="admin") {
                    echo("<p class='lead'><a href='admin/post.php?source=update&id=".$_GET["id"]."'>Editer</a></p> ");
                }?>
                <p><span class="glyphicon glyphicon-time"></span> Posté le : <?php echo $date_post; ?></p>
                <img class="img-responsive" src="/images<?php echo $image; ?>" alt="">
                <p><?php echo $description; ?></p>


                <?php 
                    if(isset($_POST["contenu"]) && $_POST["contenu"]!="") {
                        $query="INSERT INTO commentaire(post_id,auteur,email,contenu,date) 
                        VALUES (:id, :auteur, :email, :contenu, :date)";
                        $date=date("Y-m-d");
                        extract($_POST);
                        if (empty($auteur) || empty($contenu)) {
                            echo("Erreur, le commentaire est invalide.");
                        } else {
                            simpleQuery($query, 
                            [":id"=> $_GET["id"], ":auteur" => $_SESSION["pseudo"],
                            ":email" => $_SESSION["email"],":contenu" => $contenu, ":date" => $date ] );
                            echo("Votre commentaire a bien été ajouté");    
                            $query="UPDATE posts SET nombre_commentaire = nombre_commentaire + 1 
                                    WHERE post_id = :id";
                            simpleQuery($query, [":id"=> $_GET["id"]]);
                            
                        }
                    } else {
                        echo ("<h4 style='color:red;'>Erreur : Un commentaire ne peut pas être vide</h4>");
                    }
                ?>
                <br>
                        <!-- Comments Form -->
                <div class="well">


                <?php 
                    if (isset($_SESSION["role"])) {
                ?>
                <h4>Laisser un commentaire:</h4>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="comment">Votre commentaire</label>
                        <textarea name="contenu" id="editeur" class="form-control" rows="3"></textarea>
                    </div>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editeur' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                    <button type="submit" name="create_comment" class="btn btn-primary">Confirmer</button>
                </form>
                <?php } else {
                    echo ("<h4><a href=''>Connectez vous pour laisser un commentaire !</a></h4>
                    <form  role='form'></form>");
                }?>
                </div>
                <?php }} else {
                    header("Location: ./");
                }?>
                <!-- Posted Comments -->

                <?php 
                    $query="SELECT * FROM commentaire 
                    WHERE status!= 'invalidé' AND post_id = :id 
                    ORDER BY date";
                    $data= fetchAll($query, [":id"=> $_GET["id"] ]);
                    foreach($data as $row) {
                        extract($row);

                ?>


                

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $auteur ?>
                            <small><?php echo $date ?></small>
                        </h4>
                        <?php echo $contenu ?>
                    </div>
                </div>
                        <?php } ?>
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
