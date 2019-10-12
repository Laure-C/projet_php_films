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
        <h1>Ajouter un ou plusieurs film.s</h1>
      </div>
    </div>

    <div class = "main">
    <?php
    require('listeDeroulante.php');
    require('autoComp.php');
    require('sql.php');

    $questions=[
        array(
            "name" => "Nom",
            "type" => "text",
            "text" => "Titre du film original ",
        ),
        array(
            "name" => "Prenom",
            "type" => "text",
            "text" => "Titre du film en français ",
        ),

        array(
            "name" => "Genre",
            "type" => "listeDeroulante",
            "text" => "Genre du film ",
        ),

        array(
            "name" => "Pays",
            "type" => "text-autoCompletion",
            "text" => "Pays ",
        ),

        array(
            "name" => "Realisateur",
            "type" => "text-autoCompletion",
            "text" => "Réalisateur.rice ",
        ),

        array(
            "name" => "Duree",
            "type" => "duree",
            "text" => "Durée en minute",
        ),

        array(
            "name" => "Image",
            "type" => "text",
            "text" => "Image",
        )
            ];


// Affichage d'une question de type text
function question_text($q){
    echo $q['text'] ."<br/><input type='text' name='$q[name]' autocomplete ='off'><br/>";
}


function question_autoCompl($q){
    // if ($q['name']=="Pays"){    
    //     echo $q['text'] .auto_completion('p');
    // }

    // if ($q['name']=="Nationnalite"){
    //     echo $q['text'] .auto_completion('n');
    // }
    // else{
    //     echo $q['text'] .auto_completion('r');
    // }
    echo $q['text'] . "<input type='text' name='f$q[name]'><br/>";

}

function question_duree($q){
    echo $q['text'] ."<br/><input type='range' id='rangeDuree' name='rangeDuree' min='30' max='300' value='130' step='1' oninput='result.value=parseInt(rangeDuree.value)' autocomplete='off'/>
        <output name='result'>130</output> <br/>"; 
}

function question_listeDeroulante($q){

    echo $q['text'];
    echo listeDeroulante(genres());
}


$question_handlers = array(
    "text" => "question_text",
    "listeDeroulante" => "question_listeDeroulante",
    "text-autoCompletion"  => "question_autoCompl",
    "duree" => "question_duree"
);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On présente les questions
    echo "<fieldset>
    <legend>Ajout film informations</legend>";
    echo "<form method='POST' action='AjouterFilm.php' autocomplete = 'on' ><ol>";
    foreach ($questions as $q){
        echo "<br/>";
        $question_handlers[$q['type']]($q);
    }
    echo "</ol></fieldset><input type='submit' value='Valider Ajout'> <input type='submit' value='Ajouter un autre film'></form>";
}

?>
    </div>


    </body>
</html>