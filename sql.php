<?php

// define('USER',"chatenet");
// define('PASSWD',"chatenet");
// define('SERVER',"servinfo-mariadb");
// define('BASE',"DBchatenet");

// $dsn = "mysql:dbname=".BASE.";host=".SERVER;

function connexion(){
    try{
        $connexion = new PDO('mysql:host=servinfo-mariadb;dbname=DBchatenet;charset=utf8','chatenet','chatenet');
        return $connexion;
        }
    catch(PDOException $e){
        die("Erreur ".$e->getMessage());
    }
}



function genres(){
    $connexion = connexion();
    $sql = "SELECT nom_genre FROM genres ORDER BY nom_genre ";
    $query = $connexion->query($sql);
    return $query;
}
?>