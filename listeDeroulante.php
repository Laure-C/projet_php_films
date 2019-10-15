<?php 

function listeDeroulante($listElem,$name,$val_Voulue){
    $cpt = 0;
    echo "<select name=".$name." autocomplete = 'off'> <br/><br/>";
    echo "<option name=$cpt></option><br/>";
    foreach ($listElem as $rs){
        $cpt+=1;
        echo "<option name=$cpt >".$rs[$val_Voulue]."</option><br/>";
    }
    echo "</select><br/>";
}

function listeDeroulante2($listElem,$name,$val_Voulue1,$val_Voulue2){
    $cpt = 0;
    echo "<select name=$name autocomplete = 'off'> <br/><br/>";
    echo "<option name='$cpt'></option><br/>";
    foreach ($listElem as $rs){
        $cpt+=1; 
        echo "<option name='$cpt'>".$rs[$val_Voulue1]." ".$rs[$val_Voulue2]."</option><br/>";
    }
    echo "</select><br/>";
}

?>