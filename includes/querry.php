<?php

function fetchAll($query, $params=null) {
    $db=connexion();
    $requete=$db->prepare($query);
    if ($params!=null) {
        foreach($params as $key=>$value) {
            $requete->bindValue($key, $value);
        }
    }
    $requete->execute();
    return $requete->fetchAll(); 
}