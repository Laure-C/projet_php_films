<?php

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

function genresD(){
    $connexion = connexion();
    $sql = "SELECT nom_genre, code_genre FROM genres GROUP BY code_genre, nom_genre";
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

function maxIdGenre(){
    $connexion = connexion();
    $sql = "SELECT max(code_genre) as max from genres";
    $query = $connexion->query($sql);
    return $query;
}

function trouverIdGenre($nom){
    $connexion = connexion();
    $sql = "SELECT code_genre from genres where nom_genre = $nom ";
    $query = $connexion->query($sql);
    return $query;
}

function trouverIdIndividu($nom,$prenom){
    $connexion = connexion();
    $sql = "SELECT code_indiv from films natural join individus where nom = $nom and prenom = $prenom  group by code_indiv";
    $query = $connexion->query($sql);
    return $query;
}

function filmsInfos(){
    $connexion = connexion();
    $sql = " SELECT titre_original,titre_francais,pays,date1,duree,couleur,nom_genre,nom,prenom,nationalite,date_naiss,date_mort FROM films natural join individus natural join classification natural join genres where ref_code_film = code_film and realisateur = code_indiv and ref_code_genre = code_genre group by titre_original,titre_francais";
    $query = $connexion->query($sql);
    return $query;
}

function filmsActeurs(){
    $connexion = connexion();
    $sql = " SELECT code_film,nom,prenom,nationalite,date_naiss,date_mort FROM films natural join acteurs natural join individus where ref_code_film = code_film and ref_code_acteur = code_indiv";
    $query = $connexion->query($sql);
    return $query;
}

function acteurs(){

}

function insertValFilm($titre_org,$titre_fr,$realisateur,$image,$couleur,$pays,$duree,$date){
    $connexion = connexion();
    $Id= maxIdFilm()+1;
    $realisateur = trouverIdIndividu($realisateur['nom'],$realisateur['prenom']);
    $sql = $connexion()->prepare('INSERT INTO films(code_indiv,titre_orginal,titre_francais,pays,date1,duree,couleur,realisateur,image) VALUES(:Id,:titre_org,:titre_fr,:pays,:date1,:duree,:couleur,:realisateur,:image)');
    $sql->execute(array(
    'Id' => $Id,
    'titre_org' => $titre_org,
    'titre_fr' => $titre_fr,
    'pays' => $pays,
    'date1' => $date1,
    'duree' => $duree,
    'couleur' => $couleur,
    'realisateur' => $realisateur,
    'image' => $image
    ));
    // close();

    }
function insertValGenreFilm($genre){
    $connexion = connexion();
    $Id= maxIdFilm();
    $genre = trouverIdGenre($genre);
    $sql = $connexion()-> prepare('INSERT INTO classificaiton(ref_code_film,ref_code_genre) VALUES(:Id,:genre)');
    $sql->execute(array(
    'Id' => $Id,
    'genre' => $genre
    ));
    // close();

}


?>