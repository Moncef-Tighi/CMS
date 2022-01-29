<?php
    require("./includes/database.php");
    include("./includes/querry.php");
    include("./includes/header.php");
?>

<body>
  <div id="page-wrapper" style="width: 80%;
    margin: 0 auto;">
  <div id="wrapper">
<?php
        $query="SELECT * FROM user WHERE user_id= :id";
        $data=fetchOne($query, [":id"=>$_GET["id"]]);
    ?>

<h1 class="page-header" style="text-align: center;">
  <?php echo $data["nom"]?> <?php echo $data["prenom"] ?><small>  Profile</small>
</h1>


        <!-- Navigation -->
        <?php include("./includes/navigation.php"); ?>

            <div class="container">

    <div class="row">                        
    <div class="container">
    <div class="main-body">
    

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $data['image'];?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $data["pseudo"];?></h4>
                      <p class="text-secondary mb-1"><?php echo $data["nom"];?> <?php echo $data["prenom"];?></p>
                      <p class="text-muted font-size-sm"><?php echo $data["email"];?></p>
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
                    <?php echo $data["nom"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prenom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data["prenom"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rôle</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data["role"];?>
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
                        <?php echo $data["email"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <?php 
                    if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
                    ?>

                    <div class="col-sm-12">
                      <a class="btn btn-info" href="admin/users.php?source=update&id=<?php echo $data["user_id"]?>">Edit</a>
                    </div>
                    <?php }?>
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


    </div>

</body>

</html>
