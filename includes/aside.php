<aside class="col-md-4">

    <?php 
    if (!isset($_SESSION["role"]))  {?>
    <div class="well">
        <h4>Connexion : </h4>
        <div class="input-group">
            <form action="includes/login.php" method="post">
                <div class="form-group">
                    <label for="pseudo">Pseudo : </label>
                    <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Veuillez entrer votre pseudo">                    
                </div>
                <div class="input-group">
                    <label for="password">Password : </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Veuillez entrer votre mot de passe">
                </div>
                <div class="input-group">
                    <br>
                    <button type="submit" class="btn btn-primary" name="login">Envoyer</button>
                </div>
            </form>

        </div>
    </div>
    <?php }?>
    <!--Recherche form -->
    <div class="well">
        <h4>Blog Search</h4>
        <div class="input-group">
            <form action="search.php" method="post">
                <input type="text" name="recherche" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </form>

        </div>
    </div>

    

    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php
                        $query = "SELECT * FROM categorie LIMIT 5";
                        $data= fetchAll($query);
                        foreach($data as $row) {
                            $id=$row["categorie_id"];
                            $titre=$row["categorie_titre"];
                    ?>
                    <li><a href="category.php?id=<?php echo $id ?>"><?php echo $titre; ?></a></li>
                    <?php } ?>
                </ul>
            </div>

        </div>

    </div>


    <?php include("widget.php") ?>

</aside>
