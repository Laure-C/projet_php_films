<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <div class="haut">
      <div class="hauthaut">
        <img src="" alt="">
        <p>Voir film</p>
        <p>Gérer/Ajouter</p>
        <p>Plus d'informations</p>
      </div>
      <div class="hautbas">
        <h1>Gestion</h1>
      </div>
    </div>

    <!-- Contenue de la page -->
    <div class="contenuGerer">
      <div class="choisir">
      <form name="choixFilm" action="AjouterFilm.php" method="post">
      <input type="submit" value="Ajouter un ou plusieurs film.s">
      </form>
      <form name="choixIndiv" action="AjouterIndiv.php" method="post">
      <input type="submit" value="Ajouter un ou plusieurs individu.s">
      </form>
      <form name="choixGenre" action="AjouterGenre.php" method="post">
      <input type="submit" value="Ajouter un ou plusieurs genre.s">
      </form>
      </div>
    </div>

  </body>
</html>