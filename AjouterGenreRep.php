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

    if(isset($_POST['Genre'])){

        $genre= $_POST['Genre'];
        insertGenre($genre);
        echo "<br><p>Le genre que vous avez renseigné précédement a été enregistré !<p/>";

}



?>
    </div>

    </body>
</html>
