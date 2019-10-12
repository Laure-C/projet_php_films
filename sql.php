s<?php

// define('USER',"chatenet");
// define('PASSWD',"chatenet");
// define('SERVER',"servinfo-mariadb");
// define('BASE',"DBchatenet");

// $dsn = "mysql:dbname=".BASE.";host=".SERVER;

function connexion(){
    try{
        //$connexion = new PDO('mysql:host=servinfo-mariadb;dbname=DBchatenet;charset=utf8','chatenet','chatenet');
        $connexion = new PDO('mysql:host=localhost;dbname=DBchatenet;charset=utf8','root','');
        return $connexion;
        }
    catch(PDOException $e){
        die("Erreur ".$e->getMessage());
    }
}



function genres(){
    $connexion = connexion();
    $sql = "SELECT nom_genre FROM genres GROUP BY nom_genre";
    $query = $connexion->query($sql);
    return $query;
}

function realisateur(){
    $connexion = connexion();
    $sql = "SELECT prenom,nom from individus natural join films where code_indiv in (select realisateur from films) group by prenom,nom";
    $query = $connexion->query($sql);
    return $query;
}

function pays(){
    $connexion = connexion();
    $sql = "SELECT pays FROM films GROUP BY pays";
    $query = $connexion->query($sql);
    return $query;
}

function nationnalites(){
    $connexion = connexion();
    $sql = "SELECT nationalite FROM individus GROUP BY nationalite";
    $query = $connexion->query($sql);
    return $query;
}

function maxIdIndiv(){
    $connexion = connexion();
    $sql = "SELECT max(code_indiv) as max from individus";
    $query = $connexion->query($sql);
    return $query;
}

function maxIdFilm(){
    $connexion = connexion();
    $sql = "SELECT max(code_indiv) as max from films";
    $query = $connexion->query($sql);
    return $query;
}

function trouverIdIndividu($nom,$prenom){
    $connexion = connexion();
    $sql = "SELECT code_indiv from films natural join individus where nom = $nom and prenom = $prenom  group by code_indiv";
    $query = $connexion->query($sql);
    return $query;
}

?>