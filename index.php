<?php 
require("./includes/database.php");
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
                    $db=connexion($db);
                    $query="SELECT * FROM posts";
                    $requete=$db->prepare($query);
                    $requete->execute();
                    $data = $requete->fetchAll(); 
                    foreach($data as $row) {
                        $titre=$row["titre"];
                        $auteur=$row["auteur"];
                        $date=$row["date_post"];
                        $image=$row["image"];
                        $description=$row["description"];
                        ?>

                <h2>
                    <a href="#"><?php echo $titre;?></a>
                </h2>
                <p class="lead">
                    Par <a href="index.php"><?php echo $auteur; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posté le : <?php echo $date; ?></p>
                <img class="img-responsive" src="/images<?php echo $image; ?>" alt="">
                <p><?php echo $description; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


                <?php } //Fin de la loop d'affichage ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Précédent</a>
                    </li>
                    <li class="next">
                        <a href="#">Suivant &rarr;</a>
                    </li>
                </ul>

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
