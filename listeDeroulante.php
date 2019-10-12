<?php 

function listeDeroulante($listElem){
$cpt = 1;
    echo '<select name="genre" autocomplete = "off"> <br/><br/>';
	foreach ($listElem as $rs){
        if ($cpt == 1){
            echo '<option value=$cpt selected="selected">'.$rs['nom_genre'].'</option><br/>';
            $cpt ++;
        }           
        echo '<option value=$cpt >'.$rs['nom_genre'].'</option><br/>';


    }
    echo '</select><br/>';
}

?>