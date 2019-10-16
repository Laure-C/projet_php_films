<?php

function connexion(){
    try{
        // $connexion = new PDO('mysql:host=servinfo-mariadb;dbname=DBdecaux;charset=utf8','decaux','decaux');
        $connexion = new PDO('mysql:host=localhost;dbname=DBchatenet;charset=utf8','root','');
        // $connexion = new PDO('mysql:host=servinfo-mariadb;dbname=DBhun;charset=utf8','hun','hun');
        return $connexion;
        }
    catch(PDOException $e){
        die("Erreur ".$e->getMessage());
    }
}


function triFilms($genre, $pays, $real){
    $where = "";
    if ($genre != ""){
        if ($where==""){
            $where = "WHERE ";
        }
        else{
            $where .= " and ";
        }
        $where .= "ref_code_genre IN (
            SELECT code_genre 
            FROM genres 
            WHERE nom_genre=\"$genre\" 
        )";
    }
    if ($pays != ""){
        if ($where==""){
            $where = "WHERE ";
        }
        else{
            $where .= " and ";
        }
        $pays = explode("<",$pays)[0];
        $where .= "pays=\"$pays\"";
    }
    if ($real != ""){
        if ($where==""){
            $where = "WHERE ";
        }
        else{
            $where .= " and ";
        }
        $nom = explode(" ",$real)[0];
        $prenom = explode(" ",$real)[1];
        
        $where .= "realisateur IN (
            SELECT code_indiv 
            FROM individus 
            WHERE nom=\"$nom\" 
                and prenom=\"$prenom\"
        )";
    }
    return $where;
}
function orderbyFilms($tri){
    $orderby = "";
    $trii = "";
    if ($tri != ""){
        if ($tri == "aph_o"){
            $trii = "titre_original";
        }
        if ($tri == "Non_aph_o"){
            $trii = "titre_original DESC";
        }
        if ($tri == "aph_fr"){
            $trii = "titre_francais";
        }
        if ($tri == "Non_aph_fr"){
            $trii = "titre_francais DESC";
        }
        $orderby .= "ORDER BY $trii";
    }
    return $orderby;
}

function imagesssss($genre, $pays, $real, $tri){
    $connexion = connexion();
    
    $where = triFilms($genre, $pays, $real);
    $orderby = orderbyFilms($tri);
    $sql = "SELECT code_film,image 
            FROM films INNER JOIN classification ON films.code_film=classification.ref_code_film " 
            .$where.
            " GROUP BY code_film ".$orderby;
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function imagesss($genre, $pays, $real){
    $connexion = connexion();
    
    $where = triFilms($genre, $pays, $real);
    $sql = "SELECT code_film,image 
            FROM films INNER JOIN classification ON films.code_film=classification.ref_code_film " 
            .$where.
            " GROUP BY code_film";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}


function images(){
    $connexion = connexion();
    $sql = "SELECT code_film,image FROM films order by titre_francais";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function genres(){
    $connexion = connexion();
    $sql = "SELECT nom_genre FROM genres GROUP BY nom_genre";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}

function genresD(){
    $connexion = connexion();
    $sql = "SELECT nom_genre, code_genre FROM genres GROUP BY code_genre, nom_genre";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function realisateur(){
    $connexion = connexion();
    $sql = "SELECT prenom,nom from individus natural join films where code_indiv in (select realisateur from films) group by prenom,nom";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function Couleur(){
    $connexion = connexion();
    $sql = "SELECT couleur FROM films GROUP BY couleur";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}

function pays(){
    $connexion = connexion();
    $sql = "SELECT pays FROM films GROUP BY pays";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}

function nationnalites(){
    $connexion = connexion();
    $sql = "SELECT nationalite FROM individus GROUP BY nationalite";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}

function maxIdIndiv(){
    $connexion = connexion();
    $sql = "SELECT max(code_indiv) as max from individus";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function maxIdFilm(){
    $connexion = connexion();
    $sql = "SELECT max(code_indiv) as max from films";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function maxIdGenre(){
    $connexion = connexion();
    $sql = "SELECT max(code_genre) as max from genres";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}

function trouverIdGenre($nom){
    $connexion = connexion();
    $sql = "SELECT code_genre from genres where nom_genre = $nom ";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}

function trouverIdIndividu($nom,$prenom){
    $connexion = connexion();
    $sql = "SELECT code_indiv from films natural join individus where nom = $nom and prenom = $prenom  group by code_indiv";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function filmsInfos(){
    $connexion = connexion();
    $sql = " SELECT titre_original,titre_francais,pays,date1,duree,couleur,nom_genre,nom,prenom,nationalite,date_naiss,date_mort FROM films natural join individus natural join classification natural join genres where ref_code_film = code_film and realisateur = code_indiv and ref_code_genre = code_genre group by titre_original,titre_francais";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function filmsInfos2($id){
    $connexion = connexion();
    $sql = " SELECT code_film,titre_original,titre_francais,pays,date1,duree,couleur,nom_genre,nom,prenom,nationalite,date_naiss,date_mort,image FROM films natural join individus natural join classification natural join genres where ref_code_film = code_film and realisateur = code_indiv and ref_code_genre = code_genre and code_film=$id"; 
    $query = connexion()->query($sql);
    $connexion = NULL;
    return $query;
}

function filmsActeurs(){
    $connexion = connexion();
    $sql = " SELECT code_film,nom,prenom,nationalite,date_naiss,date_mort FROM films natural join acteurs natural join classification natural join individus where ref_code_film = code_film and ref_code_acteur = code_indiv";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}


function afficherfilmActeurs($cF){
    $connexion = connexion();
    $sql = " SELECT ref_code_film,nom,prenom,nationalite,date_naiss,date_mort from acteurs natural join individus where ref_code_film=$cF and ref_code_acteur=code_indiv";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function rechercheImages($t){
    $connexion = connexion();
    $sql = "SELECT code_film,image FROM films where UPPER(titre_original) like '%$t%' or LOWER(titre_original) like '%$t%' or titre_original like '%$t%'order by titre_francais";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}


function insertValFilm($titre_org,$titre_fr,$realisateur,$image,$couleur,$pays,$duree,$date){
    $connexion = connexion();
    $Id= maxIdFilm()+1;
    $realisateur = trouverIdIndividu($realisateur['nom'],$realisateur['prenom']);
    $stmt = $connexion()->prepare('INSERT INTO films(code_indiv,titre_orginal,titre_francais,pays,date1,duree,couleur,realisateur,image) VALUES(:Id,:titre_org,:titre_fr,:pays,:date1,:duree,:couleur,:realisateur,:image)');
    $stmt -> bindParam(':Id',$Id);
    $stmt -> bindParam(':titre_org',$titre_org);
    $stmt -> bindParam(':titre_fr', $titre_fr);
    $stmt -> bindParam(':pays',$pays);
    $stmt -> bindParam(':date1',$date1);
    $stmt -> bindParam(':duree',$duree);
    $stmt -> bindParam(':couleur', $couleur);
    $stmt -> bindParam(':realisateur', $realisateur);
    $stmt -> bindParam(':image',$image);
    $stmt -> execute();
    $connexion = NULL;
    echo "Vous avez ajouté le film : ".$titre_org;
}


function insertValGenreFilm($genre){
    $connexion = connexion();
    $Id= maxIdFilm();
    $genre = trouverIdGenre($genre);
    $stmt = $connexion()-> prepare('INSERT INTO classificaiton(ref_code_film,ref_code_genre) VALUES(:Id,:genre)');
    $stmt -> bindParam(':Id',$Id);
    $stmt -> bindParam(':genre',$genre);
    $stmt -> execute();
    $connexion = NULL;
}


?>
