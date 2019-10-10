<?php 
function listeDeroulGenres(){
    $cpt = 1;
    $sql = "SELECT nom_genre FROM genres WHERE nom_genre LIKE (:Genre) ORDER BY nom_genre ";
	$query = $pdo->prepare($sql);
	$query->execute();
    $list = $query->fetchAll();
    echo '<select name="test"> <\br><\br>';
	foreach ($list as $rs){
        $nom_genre = str_replace($_POST['Genre'], '<b>'.$_POST['Genre'].'</b>', $rs['nom_genre']);
        if ($cpt == 1){
            echo '<option value=$cpt selected="selected">'.$nom_genre.'</option><\br>';
        }
        else{
            echo '<option value=$cpt >'.$nom_genre.'</option><\br>';
        }

    }
    echo '</select><\br>';
}

?>