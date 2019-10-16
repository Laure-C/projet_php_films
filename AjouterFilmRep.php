<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Ajout films</title>
  </head>
  <body>
    <div class="haut">
    <?php
      require 'header.html';
     ?>
     <div class="hautbas">
       <h1>Ajouter un genre</h1>
     </div>
   </div>
   
    <?php
    echo "<div class = 'main'>";

    function connexion(){
    try{
        // $connexion = new PDO('mysql:host=servinfo-mariadb;dbname=DBdecaux;charset=utf8','decaux','decaux');
        $connexion = new PDO('mysql:host=localhost;dbname=DBchatenet;charset=utf8','root','');
        return $connexion;
        }
    catch(PDOException $e){
        die("Erreur ".$e->getMessage());
    }
}

    function listIdFilm(){
    $connexion = connexion();
    $sql = "SELECT code_film from films order by code_film desc";
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

function insertValFilm($titre_org,$titre_fr,$realisateur,$image,$couleur,$pays,$duree,$date){
    $connexion = connexion();
    $Id= listIdFilm();
    $id=0;
    foreach($Id as $i){
        if($id == 0){
            $id =$i['code_film']+1;
        }
    }

    $nom = explode(" ",$realisateur)[0];
    $prenom = explode(" ",$realisateur)[1];
    $realisateur = trouverIdIndividu($nom,$prenom);
    $stmt = $connexion->prepare('INSERT INTO films(code_film,titre_orginal,titre_francais,pays,date1,duree,couleur,realisateur,image) VALUES(:Id,:titre_org,:titre_fr,:pays,:date1,:duree,:couleur,:realisateur,:image)');
    $stmt -> bindParam(':Id',$id);
    $stmt -> bindParam(':titre_org',$titre_org);
    $stmt -> bindParam(':titre_fr', $titre_fr);
    $stmt -> bindParam(':pays',$pays);
    $stmt -> bindParam(':date1',$date);
    $stmt -> bindParam(':duree',$duree);
    $stmt -> bindParam(':couleur', $couleur);
    $stmt -> bindParam(':realisateur', $realisateur);
    $stmt -> bindParam(':image',$image);
    $stmt -> execute();
    // couleur radiobutton realisateur liste (nom " " prenom)
    echo "<br>Vous avez ajouté le film : ".$titre_org;
}


function insertValGenreFilm($genre){
    $connexion = connexion();
    $Id= listIdFilm();
    $id=0;
    foreach($Id as $i){
        if($id == 0){
            $id =$i['code_film'];
        }
    }
    $idgenre = trouverIdGenre($genre);
    $stmt = $connexion-> prepare('INSERT INTO classificaiton(ref_code_film,ref_code_genre) VALUES(:Id,:genre)');
    $stmt -> bindParam(':Id',$id);
    $stmt -> bindParam(':genre',$idgenre);
    $stmt -> execute();
}

    if(isset($_POST['titreOriginal']) && isset($_POST['titreFrancais']) && isset($_POST['Pays']) && isset($_POST['Date']) && isset($_POST['Duree']) && isset($_POST['couleur']) && isset($_POST['real']) && isset($_POST['genre'])){

        $titre_orig=$_POST['titreOriginal'];
        $titre_fr=$_POST['titreFrancais'];
        $genre= $_POST['genre'];
        $realisateur= $_POST['real'];
        $image= $_POST['Image'];
        $couleur= $_POST['couleur'];
        $pays=$_POST['Pays'];
        $duree = $_POST['Duree'];
        $date=$_POST['Date'];

        insertValFilm($titre_orig,$titre_fr,$realisateur,$image,$couleur,$pays,$duree,$date);
        insertValGenreFilm($genre); 
        echo " Vous pouvez maintenant consulter les films ! ";

    }



?>
    </div>
                                    
    </body>
</html>