<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Ajout films</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <div class="haut">
    <div class="hauthaut">
        <a href="accueil.php"><img src="https://www.pinclipart.com/picdir/big/178-1785162_white-home-icon-png-vector-royalty-free-download.png" alt="home"></a>
        <a href="voirFilm.php"><p >Voir film</p></a>
        <a href="Gerer.php" class="pageactive" ><p>Gérer/Ajouter</p></a>
        <a href="plusInformations.html"><p> Plus d'informations </p></a>
      </div>
      <div class="hautbas">
        <h1> Ajouter un film </h1>
      </div>
    </div>

    <div class = "main">
    <?php
    require('sql.php');

    if(isset($_POST['titreOriginal']) && isset($_POST['titreFrancais']) && isset($_POST['Pays']) && isset($_POST['Date']) && isset($_POST['Duree']) && isset($_POST['Couleur']) && isset($_POST['Realisateur']) && isset($_POST['Genre'])){

        $titre_orig=$_POST['titreOriginal'];
        $titre_fr=$_POST['titreFrancais'];
        $genre= $_POST['Genre'];
        $realisateur= $_POST['Realisateur'];
        $image= $_POST['Image'];
        $couleur= $_POST['Couleur'];
        $pays=$_POST['Pays'];
        $duree = $_POST['Duree'];
        $date=$_POST['Date'];
        insertValFilm($titre_orig,$titre_fr,$realisateur,$image,$couleur,$pays,$duree,$date);
        insertValGenreFilm($genre); 

    }



?>
    </div>
                                    
    </body>
</html>