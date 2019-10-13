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
        <img src="https://www.pinclipart.com/picdir/big/178-1785162_white-home-icon-png-vector-royalty-free-download.png" alt="home">
        <a href="voirFilm.php"><p >Voir film</p></a>
        <a href="Gerer.php" class="pageactive"><p>Gérer/Ajouter</p></a>
        <a href="plusInformations.html"><p>Plus d'informations</p></a>
      </div>

      <div class="hautbas">
        <h1>Gestion</h1>
      </div>
    </div>

    <!-- Contenue de la page -->
    <div class="contenue">
  <br/>
      <p align='center'><b>Avant de pouvoir ajouter un film vous devez ajouter un genre et un réalisateur.rice s'il n'existe pas su le site !<b/> <br/> </p>
      <div class="choisir">
      <form name="choixIndiv" action="AjouterIndiv.php" method="post">
      <input type="submit" class="GererSub" value="Ajouter un individu" align=''>
      </form>
      <br/> 
      <form name="choixGenre" action="AjouterGenre.php" method="post">
      <input type="submit" class="GererSub" value="Ajouter un genre de film">
      </form>
      <br/> 
      <form name="choixFilm" action="AjouterFilm.php" method="post">
      <input type="submit" class="GererSub" value="Ajouter un film">
      </form>
      </div>
    </div>

  </body>
</html>