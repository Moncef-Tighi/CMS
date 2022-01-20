
<?php
    include("./includes/header.php");


    if (isset($_POST["titre"]) ) {
        $titre=$_POST["titre"];
        if (empty($titre)) {
            echo "Le titre ne peut pas être vide";
        } else {

            $query="INSERT INTO categorie(categorie_titre) VALUES ( :titre )";
            simpleQuery($query,[":titre" => $titre]);
        }
    }

    if (isset($_GET["delete"])) {
        $query="DELETE FROM categorie WHERE categorie_id = :id";
        simpleQuery($query,[":id" => $_GET["delete"] ]);
    }
    if (isset($_POST["edit"])) {
        $query="UPDATE categorie SET categorie_titre = :titre WHERE categorie_id = :id";
        simpleQuery($query,[":id" => $_GET["edit"], ":titre" => $_POST["edit"]  ]);

    }
?>

<body>



    <div id="wrapper">

        <!-- Navigation -->
        <?php include("./includes/navigation.php"); ?>

        <div id="page-wrapper">
            <!-- MAIN PAGE -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenue Admin
                            <small>Catégorie</small>
                        </h1>

                    </div>

                    <div class="col-xs-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="titre">Titre catégorie</label>
                                <input class="form-control" type="text" name="titre">

                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Ajouter une nouvelle catégorie">
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered">
                            <theader>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Actions</th>
                                </tr>
                            </theader>
                            <tbody>
                                <?php 
                                $query="SELECT * FROM categorie";
                                $data=fetchAll($query);
                                foreach($data as $row) {
                                    $id=$row["categorie_id"];
                                    $titre=$row["categorie_titre"];
                                
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $titre; ?></td>
                                    <td> <a href='categories.php?edit=<?php echo $id; ?>'>
                                            <img class='btn-actions' src='../images/editer.svg' alt='Editer'></a>
                                        <a href='categories.php?delete=<?php echo $id; ?>'>
                                            <img class='btn-actions' src='../images/supprimer.svg' alt='Supprimer'></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <?php
                        if(isset($_GET["edit"])) {
                            include("./includes/categorie_update.php");
                        }
                    ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>




</body>

</html>
