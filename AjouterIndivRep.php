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