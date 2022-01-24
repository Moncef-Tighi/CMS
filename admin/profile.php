
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
                            <small>Profile</small>
                        </h1>

                        
                        <div class="container">
    <div class="main-body">
    

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../images/<?php echo $_SESSION['image'];?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION["pseudo"];?></h4>
                      <p class="text-secondary mb-1"><?php echo $_SESSION["nom"];?> <?php echo $_SESSION["prenom"];?></p>
                      <p class="text-muted font-size-sm"><?php echo $_SESSION["email"];?></p>
                      <button class="btn btn-primary">Suivre</button>
                      <button class="btn btn-outline-primary">Envoyer un message</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION["nom"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prenom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION["prenom"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rôle</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION["role"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Numéro de téléphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (xxx) xxx-xxxx
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION["email"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info" href="users.php?source=update&id=<?php echo $_SESSION["user_id"]?>">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              



            </div>
          </div>

        </div>
    </div>


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
