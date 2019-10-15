<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Ajout films</title>
  </head>
  <body>

    
    <?php

    require 'header.html';

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

function listIdGenre(){
    $connexion = connexion();
    $sql = "SELECT code_genre from genres order by code_genre desc";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;

}
function insertGenre($genre){
    $connexion = connexion();
    $Id= listIdGenre();
    $id=0;
    foreach($Id as $i){
        if($id == 0){
            $id =$i['code_genre']+1;
        }
    }
    $stmt = $connexion-> prepare('INSERT INTO genres(code_genre,nom_genre) VALUES(:code_genre,:nom_genre)');
    $stmt -> bindParam(':code_genre',$id);
    $stmt -> bindParam(':nom_genre',$genre);
    $stmt -> execute();
    $connexion = NULL;
}

    if(isset($_POST['Genre'])){

        $genre= $_POST['Genre'];
        insertGenre($genre);
        echo "<br><p>Le genre que vous avez renseigné précédement a été enregistré !<p/>";

}



?>
    </div>
                                    
    </body>
</html>