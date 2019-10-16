<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Ajout films</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <?php
      require 'header.html';
     ?>

    <div class = "main">
    <?php
    require('listeDeroulante.php');
    require('sql.php');

    $questions=[
        array(
            "name" => "titreOriginal",
            "type" => "text",
            "exemple" => 'Harry Potter and the Goblet of Fire',
            "text" => "Titre du film original ",),
        array(
            "name" => "titreFrancais",
            "type" => "text",
            "exemple" => 'Harry Potter et la coupe de feu',
            "text" => "Titre du film en français ",),

        array(
            "name" => "Genre",
            "type" => "listeDeroulante1",
            "text" => "Genre du film ",),

        array(
            "name" => "Pays",
            "exemple" =>"Angleterre",
            "type" => "text",
            "text" => "Pays ",),

        array(
            "name" => "Date",
            "type" => "date",
            "text" => "Date de sortie ",),

        array(
            "name" => "Realisateur",
            "exemple" => "Mike Leigh",
            "type" => "listeDeroulante3",
            "text" => "Réalisateur.rice ",),

        array(
            "name" => "Duree",
            "type" => "duree",
            "text" => "Durée en minute",),

        array(
            "name" => "Couleur",
            "type" => "radiobutton",
            "text" => "Le film est en noir et blanc ou en couleur ? ",
            "choices" =>[
             array(
                "text" => "NB",
                "value" => "nb"),
            array(
                "text" => "couleur",
                "value" => "couleur"),
            array(
                "text" => "NB/couleur",
                "value" => "couleur")

            ],),

        array(
            "name" => "Image",
            "exemple" => "Lien URL",
            "type" => "text",
            "text" => "Image",)];


// Affichage d'une question de type text
function question_text($q){

    echo $q["text"] ."<br/><input type='text' name='$q[name]' id='$q[name]' autocomplete ='off' placeholder='$q[exemple]' required><br/>";
}


function question_autoCompl($q){
    echo $q["text"] ."<div class='auto' style='width:300px;'><input id='pays' type='text' name=".$q["name"]." id=".$q["name"]." placeholder='$q[exemple]' required></div>";

}

function question_duree($q){
    echo $q["text"] ."<br/><input type='range' class='slider' name=".$q["name"]." id=".$q["name"]." min='30' max='300' value='130' step='1' oninput='result.value=parseInt(".$q["name"].".value)' autocomplete='off'>
        <output name='result'>130</output> <br/>";
}

function question_listeDeroulante1($q){
    echo $q["text"].'<br/>';
    echo listeDeroulante(genres(),"genre",'nom_genre');
}


function question_radiobutton($q){
    $html = $q["text"] . "<br/>";
    $i = 0;
    foreach($q["choices"] as $c){
        $i += 1;
        $html .= "<input type='radio' class='container' name=".$q["name"]." value=".$c["value"]." id=".$q["name"]."-$i>";
        $html .= "<label for=".$q["name"]."-$i><span></span>".$c["text"]."</label><br/>";
    }
    echo $html;
    echo "<br> <p>* NB = noir et blanc</p>";
}


function question_listeDeroulante2($q){
    echo $q['text'].'<br/>';
    echo listeDeroulante(pays(),"pays",'pays');
}

function question_date($q){
    echo $q['text'] ."<br/><input type='number' name=".$q["name"]." value='2000' min='1800' max='2100'><br/>";
}

function question_listeDeroulante3($q){
    echo $q["text"].'<br/>';
    echo listeDeroulante2(realisateur(),"real",'nom','prenom');
}

$question_handlers = array(
    "text" => "question_text",
    "date" => "question_date",
    "listeDeroulante1" => "question_listeDeroulante1",
    "listeDeroulante2" => "question_listeDeroulante2",
    "listeDeroulante3" => "question_listeDeroulante3",
    "radiobutton"  => "question_radiobutton",
    "text-autoCompletion"  => "question_autoCompl",
    "duree" => "question_duree"
);



    // On présente les questions\
    echo '<div class="Formulaire"><h2>Ajout d\'informations sur film</h2>';
    echo "<form method='POST' action='AjouterFilmRep.php'><ol> ";
    foreach ($questions as $q){
        echo "<br/>";
        $question_handlers[$q["type"]]($q);
    }
    echo "</ol><input type='submit' name ='submit' value='Valider Ajout'> </form> </div>";



?>
    </div>

    </body>
</html>
