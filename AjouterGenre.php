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
        <img src="https://media.gettyimages.com/photos/idyllic-home-with-covered-porch-picture-id479767332?s=612x612" alt="home">
        <a href="voirFilm.php"><p >Voir film</p></a>
        <a href="Gerer.php" class="pageactive" ><p>Gérer/Ajouter</p></a>
        <a href="plusInformations.html"><p>Plus d'informations</p></a>
      </div>
      <div class="hautbas">
        <h1>Ajouter un genre</h1>
      </div>
      <div class = "main">
    <?php
    require('sql.php');
    $questions=[
        array(
            "name" => "Genre",
            "type" => "text",
            "exemple" =>"fantastique",
            "text" => "Genre du film ",)
      ];

    $question_handlers = array("text" => "question_text");

    function question_text($q){
    echo $q['text'] ."<br/><input type='text' name='$q[name]' id='$q[name]' autocomplete ='off' placeholder='$q[exemple]' required><br/>";}

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On présente les questions\
    echo '<fieldset><legend>Ajout un genre </legend>';
    echo "<form method='POST' action='AjouterGenre.php'><ol>";
    foreach ($questions as $q){
        echo "<br/>";
        $question_handlers[$q['type']]($q);
    }
    echo "<br/>";
    echo"<p align='center'> <b> Le genre que vous allez ajouter ne doit pas faire parti du tableau suivant</b></p>";
    echo "<br/>";
    echo '<table>';
        echo '<tr>';
            echo '<td class="rowtitle">Code genre</td>';
            echo '<td class="rowtitle">Nom du genre</td>';
        echo '</tr>';
        $genreD= genresD();
        while($donnees = $genreD->fetch()){
          echo '<tr>';
          echo '<td>';echo $donnees['code_genre'];echo '</td>';
          echo '<td>';echo $donnees['nom_genre'];echo '</td>';
          echo '</tr>';
              }
    echo '</table>';
           
    echo "</ol></fieldset><input type='submit' name ='submit' value='Valider Ajout'> </form>";}

    ?>
    </div>
    </div>
    
    </body>
</html>