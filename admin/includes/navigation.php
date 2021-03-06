<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../">Accueil</a>
</div>


<!-- MENU TOP BAR-->
<ul class="nav navbar-right top-nav">


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION["nom"];?> <?php echo $_SESSION["prenom"];?><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="users.php?source=update&id=<?php echo $_SESSION["user_id"]?>"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>








<!-- MENU SIDE BAR -->

<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="./index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> posts <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="post_dropdown" class="collapse">
                <li>
                    <a href="post.php">liste des postes</a>
                </li>
                <li>
                    <a href="post.php?source=add">ajouter un post</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i> cat??gories</a>
        </li>



        <li>
            <a href="commentaires.php"><i class="fa fa-fw fa-file"></i> commentaires</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#user_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Utilisateurs <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="user_dropdown" class="collapse">
                <li>
                    <a href="users.php">Afficher un utilisateur</a>
                </li>
                <li>
                    <a href="users.php?source=add">Ajouter un utitlisateur</a>
                </li>
            </ul>
        </li>    
    
        <li>
            <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
        </li>

    
    
    
    </ul>
</div>

</nav>
