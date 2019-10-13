<?php 

function listeDeroulante($listElem,$name,$val_Voulue){
    echo '<select name=$name autocomplete = "off"> <br/><br/>';
	foreach ($listElem as $rs){    
        echo '<option name=$cpt >'.$rs[$val_Voulue].'</option><br/>';
    }
    echo '</select><br/>';
}

function listeDeroulante2($listElem,$name,$val_Voulue1,$val_Voulue2){
    echo '<select name=$name autocomplete = "off"> <br/><br/>';
	foreach ($listElem as $rs){   
        echo '<option name=$cpt >'.$rs[$val_Voulue1].' '.$rs[$val_Voulue2].'</option><br/>';
    }
    echo '</select><br/>';
}

?>