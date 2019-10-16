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

function listIdIndiv(){
    $connexion = connexion();
    $sql = "SELECT code_indiv from individus order by code_indiv desc";
    $query = $connexion->query($sql);
    $connexion = NULL;
    return $query;
}

function insertValIndiv($nom,$prenom,$nationnalite,$date_naiss,$date_mort){
    $connexion = connexion();
    $Id= listIdIndiv();
    $id=0;
    foreach($Id as $i){
        if($id == 0){
            $id =$i['code_indiv']+1;
        }
    }

    $stmt = $connexion->prepare('INSERT INTO individus(code_indiv,nom,prenom,nationalite,date_naiss,date_mort) VALUES(:code_indiv,:nom,:prenom,:nationalite,:date_naiss,:date_mort)');
    $stmt -> bindParam(':code_indiv',$id);
    $stmt -> bindParam(':nom',$nom);
    $stmt -> bindParam(':prenom', $prenom);
    $stmt -> bindParam(':nationalite',$nationalite);
    $stmt -> bindParam(':date_naiss',$date_naiss);
    $stmt -> bindParam(':date_mort',$date_mort);
    $stmt -> execute();
    // couleur radiobutton realisateur liste (nom " " prenom)
    echo "<br>Vous avez ajouté l'individu : ".$nom;
}



        $nom=$_POST['Nom'];
        $prenom=$_POST['Prenom'];
        $nationnalite= $_POST['nationnalites'];
        $date_naiss= $_POST['DateNaissance'];
        $date_naiss = explode("-",$date_naiss)[0];

        $date_mort= $_POST['DateMort'];
        $date_mort = explode("-",$date_mort)[0];
    

        insertValIndiv($nom,$prenom,$nationnalite,$date_naiss,$date_mort);




?>
    </div>
                                    
    </body>
</html>