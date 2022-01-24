<?php

function connexion($db=null) {
    if ($db ===null) {
        $host = 'localhost';
        $dbname = 'cms';
        $username = 'root';
        $password = '';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                        $username, $password);    
            $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    return $db;

}

?>