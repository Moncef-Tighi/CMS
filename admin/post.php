
<?php
    include("./includes/header.php");


    if (isset($_GET["delete"])) {
        $query="DELETE FROM posts WHERE post_id = :id";
        simpleQuery($query,[":id" => $_GET["delete"] ]);
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
                            Bienvenue Admin
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
                            include("./includes/post_update.php");
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
