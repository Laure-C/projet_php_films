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

    require 'sql.php';






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
        $date= explode("-",$date)[0];

        insertValFilm($titre_orig,$titre_fr,$realisateur,$image,$couleur,$pays,$duree,$date);
        insertValGenreFilm($genre); 
        echo " Vous pouvez maintenant consulter les films ! ";

    }



?>
    </div>
                                    
    </body>
</html>