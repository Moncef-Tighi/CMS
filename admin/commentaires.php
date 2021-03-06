
<?php
    include("./includes/header.php");


    if (isset($_GET["delete"])) {
        $query="DELETE FROM commentaire WHERE commentaire_id = :id";
        simpleQuery($query,[":id" => $_GET["delete"] ]);
        header("Location: commentaires.php");
    }
    if (isset($_GET["valider"])) {
        $query="UPDATE commentaire SET status = 'validé' WHERE commentaire_id = :id";
        simpleQuery($query,[":id" => $_GET["valider"] ]);
    }

    if (isset($_GET["invalider"])) {
        $query="UPDATE commentaire SET status = 'invalidé' WHERE commentaire_id = :id";
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
                            Gestion des commentaires
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
