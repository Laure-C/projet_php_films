<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Ajout individu.s</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <div class="haut">
    <?php
      require 'header.html';
     ?>
     <div class="hautbas">
       <h1>Ajouter un individu</h1>
     </div>
   </div>

    <div class = "main">
    <?php
    require('listeDeroulante.php');
    require('sql.php');

    $questions=[
        array(
            "name" => "Nom",
            "type" => "text",
            "exemple" =>"Nom",
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
            "text" => "Date de décès ",),

        // array(
        //     "name" => "Acteur",
        //     "type" => "radiobutton",
        //     "text" => "Cet individu est-il un acteur.rice ? ",
        //     "choices" =>[
        //      array(
        //         "text" => "Oui",
        //         "value" => "oui"),
        //     array(
        //         "text" => "Non",
        //         "value" => "non")

        //     ],)
      ];


// Affichage d'une question de type text
function question_text($q){
    echo $q['text'] ."<br/><input type='text' name='$q[name]' autocomplete ='off' placeholder='$q[exemple]' required><br/>";
}

function question_radiobutton($q){
    $html = $q['text'] . "<br/>";
    $i = 0;
    foreach($q['choices'] as $c){
        $i += 1;
        $html .= "<input type='radio' name='$q[name]' value='$c[value]' id='$q[name]-$i'>";
        $html .= "<label for='$q[name]-$i'><span></span>$c[text]</label>";
    }
    echo $html;
}

function question_date($q){
    echo $q['text'] ."<br/><input type='date' name ='$q[name]' required> <br/>";
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
    echo '<div class="Formulaire"><h2>Ajout d\'informations sur un individu</h2>';
    echo "<form method='POST' action='AjouterIndivRep.php'><ol>";
    foreach ($questions as $q){
        echo "<br/>";
        $question_handlers[$q['type']]($q);
    }
    echo "</ol><input type='submit' name='Sub' value='Valider Ajout'> </form>";
}


?>
    </div>


    </body>
</html>
