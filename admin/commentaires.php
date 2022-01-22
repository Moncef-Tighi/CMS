
<?php
    include("./includes/header.php");


    if (isset($_GET["delete"])) {
        $query="DELETE FROM commentaire WHERE commentaire_id = :id";
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
                            include("./includes/add_commentaire.php");
                            break;
                        case 'update';
                            include("./includes/update_commentaire.php");
                            break;
                        default : 
                            include("./includes/view_commentaire.php");
                            break;
                    }
                ?>
            </div>
            <!-- /.container-fluid -->






        </div>
    </div>




</body>
</html>
