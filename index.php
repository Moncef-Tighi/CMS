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
                    $query="SELECT * FROM posts WHERE status!='invalide'";
                    $data = fetchAll($query); 
                    foreach($data as $row) {
                         extract($row);
                        ?>

                <h2>
                    <a href="post.php?id=<?php echo $post_id?>"><?php echo $titre;?></a>
                </h2>
                <p class="lead">
                    Par <a href="index.php"><?php echo $auteur; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posté le : <?php echo $date_post; ?></p>
                <a href="post.php?id=<?php echo $post_id?>"><img class="img-responsive" src="/images<?php echo $image; ?>" alt=""></a>
                <p><?php echo substr($description, 0, 250); ?></p>
                <a class="btn btn-primary" href="post.php?id=<?php echo $post_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


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
