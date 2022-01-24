<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
        ob_start();
        session_start();
        if (!$_SESSION["pseudo"] || $_SESSION["role"]!="admin") {
            session_destroy();
            header("Location: ../connexion.php");
        }
        require("../includes/database.php");
        include("../includes/querry.php");        
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSM - Page administrateur</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script defer src="js/jquery.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

</head>