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
            <div class="col-md-7" id="accueil">

                <h1 class="page-header">
                    Accueil
                    <small>liste des posts</small>
                </h1>

                <!-- Les blog posts -->
                <?php
                    $query="SELECT * FROM posts WHERE status!='invalide' LIMIT :page,10 ";
                    if (!isset($_GET["page"])) {
                        $page=0;
                        $_GET["page"]=1;
                    } else {
                        $page=intval(($_GET["page"]-1))*10;
                    }

                    $data = fetchAll($query, [":page"=> $page]);
                    foreach($data as $row) {
                         extract($row);
                        ?>

                <h2>
                    <a href="post.php?id=<?php echo $post_id?>"><?php echo $titre;?></a>
                </h2>
                <p class="lead">
                    <?php 
                        $query="SELECT user_id FROM user WHERE pseudo= :auteur";
                        $data=fetchOne($query, [":auteur"=>$auteur]);
                        if (!isset($data["user_id"])) {
                            $data["user_id"]=3;
                        }
                    ?>
                    Par <a href="profile.php?id=<?php echo $data["user_id"]?>"><?php echo $auteur; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posté le : <?php echo $date_post; ?></p>
                <a href="post.php?id=<?php echo $post_id?>"><img class="img-responsive" src="/images<?php echo $image; ?>" alt=""></a>
                <p><?php echo substr($description, 0, 250); ?></p>
                <a class="btn btn-primary" href="post.php?id=<?php echo $post_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


                <?php } //Fin de la loop d'affichage ?>
                <!-- Pager -->
                <ul class="pager">
                <?php if (isset($_GET["page"]) && $_GET["page"]>1) {?>

                    <li class="previous">
                        <a href="index.php?page=<?php echo(intval($_GET["page"])-1);?>">&larr; Précédent</a>
                    </li>
                    <?php }?>
                    <li class="next">
                        <a href="index.php?page=<?php echo(intval($_GET["page"])+1); ?>">Suivant &rarr;</a>
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
