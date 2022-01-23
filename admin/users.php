
<?php
    include("./includes/header.php");


    if (isset($_GET["delete"])) {
        $query="DELETE FROM user WHERE user_id = :id";
        simpleQuery($query,[":id" => $_GET["delete"] ]);
        header("Location: users.php");
    }
    if (isset($_GET["valider"])) {
        $query="UPDATE user SET status = 'validé' WHERE user_id = :id";
        simpleQuery($query,[":id" => $_GET["valider"] ]);
    }

    if (isset($_GET["invalider"])) {
        $query="UPDATE user SET status = 'invalidé' WHERE user_id = :id";
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
                            include("./includes/add_user.php");
                            break;
                        case 'update';
                            include("./includes/update_user.php");
                            break;
                        default : 
                            include("./includes/view_users.php");
                            break;
                    }
                ?>
            </div>
            <!-- /.container-fluid -->






        </div>
    </div>




</body>
</html>
