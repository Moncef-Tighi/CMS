<?php
require("database.php");
include("querry.php");

if (isset($_POST["login"])) {
    extract($_POST);
    $query="SELECT user_id,pseudo,nom,prenom,email,image,role FROM user WHERE pseudo= :pseudo AND password= :password ";
    $user= fetchOne($query, [":pseudo"=>$pseudo, ":password"=>$password]);
    if (!$user) {
        header("Location: ../index.php?error");
    }
    session_start();
    $_SESSION=$user;
    if ($user["role"]==="admin") {
        header("Location: ../admin/index.php");
    }
} else {
        header("Location: ../index.php");
}

?>