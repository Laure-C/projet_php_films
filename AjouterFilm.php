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
        <h1>Ajouter un ou plusieurs film.s</h1>
      </div>
    </div>

    <div class = "main">
    <?php
    require('autoComp.php');
    require('listeDeroulante.php');
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
            "type" => "text-autoCompil",
            "text" => "Pays ",
        ),

        array(
            "name" => "Realisateur",
            "type" => "text-autoCompil",
            "text" => "Réalisateur.rice ",
        ),


        array(
            "name" => "Image",
            "type" => "image",
            "text" => "Image ",
        )
            ];


// Affichage d'une question de type text
function question_text($q){
    echo $q['text'] ."<br/><input type='text' name='$q[name]'><br/>";
}

function question_autoCompil($q){
    if ($q['name']=="Pays"){    
        echo $q['text'] .auto_compilation('p');
    }

    if ($q['name']=="Nationnalite"){
        echo $q['text'] .auto_compilation('n');
    }
    // else{
    //     echo $q['text'] .auto_compilation('r');
    // }

}



function question_listeDeroulante($q){
    echo $q['text'] .listeDeroulGenres();
}


$question_handlers = array(
    "text" => "question_text",
    "radio" => "question_radio",
    "listeDeroulante" => "question_listeDeroulante",
    "text-autoCompil"  => "question_autoCompil",
    "image" => "question_image"
);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On présente les questions
    echo "<fieldset>
    <legend>ajout film informations</legend><br/><br/>";
    echo "<form method='POST' action='AjouterFilm.php'><ol>";
    foreach ($questions as $q){
        echo "<li>";
        $question_handlers[$q['type']]($q);
    }
    echo "</ol><input type='submit' value='Valider Ajout'></form><fieldset>";
}

?>
    </div>


    </body>
</html>