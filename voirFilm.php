<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Voir films</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <div class="haut">
      <div class="hauthaut">
        <a href="accueil.php"><img class="pageactive" src="https://media.gettyimages.com/photos/idyllic-home-with-covered-porch-picture-id479767332?s=612x612" alt="home"></a>
        <p class="pageactive">Voir film</p>
        <a href="Gerer.php"><p>Gérer/Ajouter</p></a>
        <a href="plusInformations.html"><p>Plus d'informations</p></a>
      </div>
      <div class="hautbas">
        <h1>Voir film</h1>
      </div>

      <!-- Contenue -->
      <div class="contenue">
        <!-- GAUCHE -->
        <div class="asideG">
          <h2>Filtres</h2>
          <div class="titreF">
            <!-- Filtre Titre Original -->
            <h2>Titre fr ou original</h2>
            <div class="filtres">
              <input type="checkbox" name="f1">
              <p>Ordre alphabétique</p></div>
            <div class="filtres">
              <input type="checkbox" name="f2">
              <p>Ordre inverse alphabétique</p></div>
            <div class="filtres">
              <input type="checkbox" name="f3">
              <p>Commençant par la lettre</p></div>
          </div>
          <!-- Filtre Realisateur -->
          <div class="realisateurF">
            <h2>Réalisateur</h2>
            <div class="filtres">
              <input type="checkbox" name="f4">
              <p>Ordre alphabétique</p></div>
            <div class="filtres">
              <input type="checkbox" name="f5">
              <p>Ordre inverse alphabétique</p></div>
            <div class="filtres">
              <input type="checkbox" name="f6">
              <p>Commençant par la lettre</p></div>
          </div>
          <!-- Filtre Genre -->
          <div class="genreF">
            <h2>Genre du film</h2>
            <div class="filtres">
              <input type="checkbox" name="f7">
              <p>Liste les genres</p></div>
          </div>
          <!-- Filtre Pays -->
          <div class="paysF">
            <h2>Pays</h2>
            <div class="filtres">
              <input type="checkbox" name="f8">
              <p>Ordre alphabétique</p></div>
            <div class="filtres">
              <input type="checkbox" name="f9">
              <p>Ordre inverse alphabétique</p></div>
          </div>
          <!-- Filtre Couleur -->
          <div class="couleur">
            <h2>Couleur</h2>
            <div class="filtres">
              <input type="checkbox" name="f10">
              <p>Noir et Blanc</p></div>
            <div class="filtres">
              <input type="checkbox" name="f11">
              <p>Couleur</p></div>
            <div class="filtres">
              <input type="checkbox" name="f12">
              <p>Les Deux</p></div>
          </div>
          <input type="button" name="filtrer">
        </div>

        <!-- DROITE -->
        <div class="asideD">
          <div class="hautcontenue">
            <input type="text" name="recheche">
            <input type="button" name="Rechercher" value="">
          </div>
        </div>
        <ul>


        <?php
        // for ($i=0; $i < ; $i++) {
        //     echo "<li>";
        //
        //     echo "</li>";
        // }

         ?>
         </ul>
      </div>
  </body>
</html>
