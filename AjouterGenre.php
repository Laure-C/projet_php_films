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
    <?php
      require 'header.html';
     ?>
     <div class="hautbas">
       <h1>Ajouter un genre</h1>
     </div>
   </div>
    <?php
      require 'header.html';
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
    echo '<div class="Formulaire"><h2>Ajout un genre </h2>';
    echo "<form method='POST' action='AjouterGenreRep.php'><ol>";
    foreach ($questions as $q){
        echo "<br/>";
        $question_handlers[$q['type']]($q);
    }
    echo "</ol><input type='submit' name ='submit' value='Valider Ajout'> </form> ";
    echo "<br/>";
    echo"<p align='center'> <b> Le genre que vous allez ajouter ne doit pas faire parti du tableau suivant</b></p>";
    echo "<br/>";
    echo '<table>';
        echo '<tr>';
            echo '<th>Code genre</th>';
            echo '<th class="rowtitle">Nom du genre</th>';
        echo '</tr>';
        $genreD= genresD();
        while($donnees = $genreD->fetch()){
          echo '<tr>';
          echo '<td class="fill">';echo $donnees['code_genre'];echo '</td>';
          echo '<td class="fill">';echo $donnees['nom_genre'];echo '</td>';
          echo '</tr>';
              }
    echo '</table>';

    echo "</div>";}

    ?>
    </div>
    </div>

    </body>
</html>
