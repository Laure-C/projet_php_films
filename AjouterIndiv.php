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
        <h1>Ajouter un ou plusieurs individu.s</h1>
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
            "exemple" => "HNom",
            "text" => "Nom de l'individu ",),
        array(
            "name" => "Prenom",
            "type" => "text",
            "exemple" => "Prenom",
            "text" => "Prénom de l'individu ",),

        array(
            "name" => "Nationnalite",
            "type" => "listeDeroulante",
            "text" => "Nationnalité de l'individu ",),

        array(
            "name" => "DateNaissance",
            "type" => "date",
            "text" => "Date de naissance ",),


        array(
            "name" => "DateMort",
            "type" => "date",
            "text" => "Date de mort ",),

        array(
            "name" => "Acteur",
            "type" => "radiobutton",
            "text" => "Cet individu est-il un acteur.rice ? ",
            "choices" =>[
             array(
                "text" => "Oui",
                "value" => "oui"),
            array(
                "text" => "Non",
                "value" => "non")

            ],)
      ];


// Affichage d'une question de type text
function question_text($q){
    echo $q['text'] ."<br/><input type='text' name='$q[name]' autocomplete ='off' placeholder='$q[exemple]'><br/>";
}

function question_radiobutton($q){
    $html = $q['text'] . "<br/>";
    $i = 0;
    foreach($q['choices'] as $c){
        $i += 1;
        $html .= "<input type='radio' name='$q[name]' value='$c[value]' id='$q[name]-$i'>";
        $html .= "<label for='$q[name]-$i'>$c[text]</label>";
    }
    echo $html;
}

function question_date($q){
    echo $q['text'] ."<br/><input type='date' name ='$q[name]'> <br/>"; 
}

function question_listeDeroulante($q){

    echo $q['text'];
    echo listeDeroulante(nationnalites(),"nationnalites",'nationalite');
}


$question_handlers = array(
    "text" => "question_text",
    "date" => "question_date",
    "radiobutton"  => "question_radiobutton",
    "listeDeroulante" => "question_listeDeroulante"
);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On présente les questions
    echo "<fieldset>
    <legend>Ajout film informations</legend>";
    echo "<form method='POST' action='AjouterIndiv.php' autocomplete = 'on' ><ol>";
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