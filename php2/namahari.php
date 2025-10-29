<?php
function combohari($namahari){
    $hari=array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", 
                "Jumat", "Sabtu");
    echo"<select name=\"$namahari\">";
    for($i=0; $i<=6; $i++){
        echo"<option value=\"$hari[$i]\">$hari[$i]</option>";
    }
    echo"</select>";
}

echo "Hari lahir Anda: ";
combohari("harilahir")
?>