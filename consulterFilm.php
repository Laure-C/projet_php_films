<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="pluspcss.css">
    <title>Consulter Film</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <?php
      require 'header.html';
     ?>

      <!-- Contenue -->
      <div class="contenue">
      <?php

      require('sql.php');

      $idF=$_GET['ID'];
      $film=filmsInfos2($idF);

      function infosFilms($f){
        foreach($f as $ff){
        echo "<h1>".$ff['titre_original']."</h1>";
        echo "<h2>".$ff['titre_francais']."</h2>";
        echo "<div class='film'><input type='image' src=".$ff['image']." alt='image'>";
        echo "<p>Film : ".$ff['date1']."</p>";
        echo "<p>Production : ".$ff['pays']."</p>";
        echo "<p>Durée : ".$ff['duree']."</p>";
        echo "<p>Genre du film : ".$ff['nom_genre']."</p>";
        echo "<p>Film réalisé en ".$ff['couleur']."</p></div>";

        if ($ff['date_mort']!=0){
          echo "<div class='realisateur'><h2>Réalisateur</h2><p>Réalisé par ".$ff['nom']." ".$ff['prenom']." (".$ff['date_naiss']."-".$ff['date_mort'].") </p>";
        }
        else{echo "<div class='realisateur'><h2>Réalisateur</h2><p>Réalisé par ".$ff['nom']." ".$ff['prenom']." (".$ff['date_naiss'].")</p>";}
        echo "<p> Nationnalité : ".$ff['nationalite']."</p></div>";
      }

      $acteurs=afficherfilmActeurs($_GET['ID']);
      echo "<div class='realisateur'><h2>Acteurs</h2>";
      foreach($acteurs as $act){

        if ($act['date_mort']!=0){
           echo "<p>".$act['nom']." ".$act['prenom'].", acteur.rice de nationnalité ".$act['nationalite']." (".$act['date_naiss']."-".$act['date_mort'].")</p>";
        }
        else{
           echo "<p>".$act['nom']." ".$act['prenom'].", acteur.rice de nationnalité ".$act['nationalite']." (".$act['date_naiss'].")</p>";
        }


      }
      echo "</div>";

      }

      infosFilms($film);
      ?>
      <div>
  </body>
</html>
