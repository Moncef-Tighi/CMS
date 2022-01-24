
<?php
    include("./includes/header.php");
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
                            Bienvenue <?php echo $_SESSION["pseudo"]; ?>
                            <small>Dashboard</small>
                        </h1>

                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                <?php 
                                $query="SELECT count(*) AS total FROM posts";
                                $resultat=fetchOne($query);?>
                                <div class='huge'><?php echo $resultat["total"]?></div>
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="post.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus de détails...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php 
                                    $query="SELECT count(*) AS total FROM commentaire";
                                    $resultat=fetchOne($query);?>
                                    <div class='huge'><?php echo $resultat["total"]?></div>
                                    <div>Commentaires</div>
                                    </div>
                                </div>
                            </div>
                            <a href="commentaires.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus de détails...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php 
                                    $query="SELECT count(*) AS total FROM user";
                                    $resultat=fetchOne($query);?>
                                    <div class='huge'><?php echo $resultat["total"]?></div>
                                        <div> Utilisateurs</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus de détails...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php 
                                        $query="SELECT count(*) AS total FROM posts";
                                        $resultat=fetchOne($query);?>
                                        <div class='huge'><?php echo $resultat["total"]?></div>
                                        <div>Catégories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus de détails...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->






                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>




</body>

</html>