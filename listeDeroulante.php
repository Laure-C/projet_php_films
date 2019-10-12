<?php 

function listeDeroulante($listElem,$name,$val_Voulue){
$cpt = 1;
    echo '<select name=$name autocomplete = "off"> <br/><br/>';
	foreach ($listElem as $rs){
        if ($cpt == 1){
            echo '<option value=$cpt selected="selected">'.$rs[$val_Voulue].'</option><br/>';
            $cpt ++;
        }           
        echo '<option value=$cpt >'.$rs[$val_Voulue].'</option><br/>';


    }
    echo '</select><br/>';
}

?>