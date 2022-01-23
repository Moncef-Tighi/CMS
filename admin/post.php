
<?php
    include("./includes/header.php");


    if (isset($_GET["delete"])) {
        $query="DELETE FROM posts WHERE post_id = :id";
        simpleQuery($query,[":id" => $_GET["delete"] ]);
        header("Location: post.php");
    }
    if (isset($_GET["valider"])) {
        $query="UPDATE posts SET status = 'validé' WHERE post_id = :id";
        simpleQuery($query,[":id" => $_GET["valider"] ]);
    }

    if (isset($_GET["invalider"])) {
        $query="UPDATE posts SET status = 'invalidé' WHERE post_id = :id";
        simpleQuery($query,[":id" => $_GET["invalider"] ]);
    }



?>

<body>



    <div id="wrapper">

        <!-- Navigation -->
        <?php include("./includes/navigation.php"); ?>

        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des postes
                        </h1>

                    </div>
                </div>

                <?php
                    if (isset($_GET["source"])) {
                        $source=$_GET["source"];
                    } else {
                        $source="";
                    }
                    switch($source) {
                        case 'add';
                            include("./includes/add_post.php");
                            break;
                        case 'update';
                            include("./includes/update_post.php");
                            break;
                        default : 
                            include("./includes/view_posts.php");
                            break;
                    }
                ?>
            </div>
            <!-- /.container-fluid -->






        </div>
    </div>




</body>
</html>
