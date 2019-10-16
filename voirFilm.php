<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="voirpcss.css">
    <title>Voir films</title>
  </head>
  <body>
    <!-- Haut de la page -->
    <div class = "haut">
    <?php 
    require 'header.html';
    ?>
    <div class="hautbas">
    <h1>Voir film</h1>
    </div>
    </div>
    <?php
      

    echo"<form method='POST' action='recherche.php?R'>";
    echo "<input type='text' name='recherche' class='recherche' placeholder='Titre original du film'>";
      echo"<input type='submit' name ='rech' value='Rechercher'>";
    echo"</form>";

    echo '<div class="main">';


    require('listeDeroulante.php');
    require('sql.php');

    $questions=[


        array(
            "name" => "Tri",
            "type" => "radiobutton",
            "text" => "Trier par",
            "choices" =>[
              array(
                "text" => "Alphabétique original",
                "value" => "aph_o"),
              array(
                "text" => "Alphabétique inverse original",
                "value" => "Non_aph_o"),
              array(
                "text" => "Alphabétique français",
                "value" => "aph_fr"),
              array(
                "text" => "Alphabétique inverse français",
                "value" => "Non_aph_fr")
  
            ]),
        // array(
        //     "name" => "Titre français",
        //     "type" => "radiobutton",
        //     "text" => "Titre en français",
        //     "choices" =>[
        //       array(
        //         "text" => "Ordre alphabétique",
        //         "value" => "aph"),
        //       array(
        //         "text" => "Ordre inverse alphabétique",
        //         "value" => "Non_aph")

        //     ]),

          array(
            "name" => "Genre",
            "type" => "listeDeroulante1",
            "text" => "Genre du film ",),

          array(
            "name" => "Pays",
            "type" => "listeDeroulante2",
            "text" => "Pays ",),

          array(
            "name" => "Realisateur",
            "type" => "listeDeroulante3",
            "text" => "Réalisateur.rice ",),

          ];


function question_listeDeroulante1($q){
    echo $q['text'].'<br/>';
    echo listeDeroulante(genres(),"genre",'nom_genre');
}

function question_listeDeroulante2($q){
    echo $q['text'].'<br/>';
    echo listeDeroulante(pays(),"pays",'pays');
}

function question_listeDeroulante3($q){
    echo $q['text'].'<br/>';
    echo listeDeroulante2(realisateur(),"real",'nom','prenom');
}

function question_radiobutton($q){
    $html = $q['text'] . "<br/>";
    $i = 0;
    foreach($q['choices'] as $c){
        $i += 1;
        $html .= "<input type='radio' class='container' name='$q[name]' value='$c[value]' id='$q[name]-$i'>";
        $html .= "<label for='$q[name]-$i'><span></span>$c[text]</label><br/>";
    }
    echo $html;
}



    $question_handlers = array(
    "text" => "question_text",
    "listeDeroulante1" => "question_listeDeroulante1",
    "listeDeroulante2" => "question_listeDeroulante2",
    "listeDeroulante3" => "question_listeDeroulante3",
    "radiobutton"  => "question_radiobutton");

    echo '<div class="asideG"><h3>Filtres</h2>';
    echo "<form method='POST' action='voirFilm.php'><ol> ";
    foreach ($questions as $q){
        echo "<br/>";
        $question_handlers[$q['type']]($q);
    }
    echo "</ol><input type='submit' name ='submit' value='Filtrer'> </form> </div>";
    echo'<div class ="asideD">';



// AFFICHAGE DES IMAGES DE FILM

$tri = "";
$genre = "";
$pays = "";
$real = "";
if ((isset($_POST['genre'])) and (!empty($_POST['genre'])) ) {
  $genre = $_POST['genre'];
}
if ((isset($_POST['pays'])) and (!empty($_POST['pays'])) ) {
  $pays = $_POST['pays'];
}
if ((isset($_POST['real'])) and (!empty($_POST['real'])) ) {
  $real = $_POST['real'];
}
if ((isset($_POST['Tri'])) and (!empty($_POST['Tri'])) ) {
  $tri = $_POST['Tri'];
}

$lesImages= imagesssss($genre, $pays, $real, $tri);
// $lesImages= imagesss($genre, $pays, $real);
// echo '<form action="consulterFilm.php" method="post">'
// var_dump($lesImages);
foreach ($lesImages as $im){
  echo '<a href="consulterFilm.php?ID='.$im["code_film"].'"><input type="image" src="'.$im["image"].'" alt="image"></a>';
}


echo '</div>';


  ?>



</div>
  </body>
</html>
