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
    <div class="haut">
      <div class="hauthaut">
        <a href="accueil.php"><img src="https://icon-library.net/images/home-logo-icon/home-logo-icon-0.jpg" alt="home"></a>
        <p class="voirp">Voir film</p>
        <a href="Gerer.php" class="gererp"><p>Gérer/Ajouter</p></a>
        <a href="plusInformations.html" class="plusp"><p>Plus d'informations</p></a>
      </div>
      <div class="hautbas">
        <h1>Voir film</h1>
      </div>
    </div>

    <div class="main">
    <?php

    require('listeDeroulante.php');
    require('sql.php');

    $questions=[


        array(
            "name" => "Titre original",
            "type" => "radiobutton",
            "text" => "Titre original",
            "choices" =>[
              array(
                "text" => "Ordre alphabétique",
                "value" => "aph"),
              array(
                "text" => "Ordre inverse alphabétique",
                "value" => "Non_aph"),
              array(
                "text" => "Comment par la lettre : ",
                "value" => "lettre_deb")

            ]),
        array(
            "name" => "Titre français",
            "type" => "radiobutton",
            "text" => "Titre en français",
            "choices" =>[
              array(
                "text" => "Ordre alphabétique",
                "value" => "aph"),
              array(
                "text" => "Ordre inverse alphabétique",
                "value" => "Non_aph"),
              array(
                "text" => "Comment par la lettre : ",
                "value" => "lettre_deb")

            ]),

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


  $lesImages= images();
  foreach ($lesImages as $im){
    echo '<input type="image" src="'.$im["image"].'" alt="dksjf">';
  }
echo '</div>';

  ?>



</div>
  </body>
</html>
