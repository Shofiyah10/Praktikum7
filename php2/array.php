<form method="POST" action="">
Pilih Hobby Kamu:
<br>
<input name="hobby[]" type="checkbox" value="Membaca">Membaca<br>
<input name="hobby[]" type="checkbox" value="Olahraga">Olahraga<br>
<input name="hobby[]" type="checkbox" value="Fotografi">Fotografi<br>
<input name="hobby[]" type="checkbox" value="Travel">Travelling<br>
<input name="hobby[]" type="checkbox" value="Program">Programming<br>
<input name="hobby[]" type="checkbox" value="Otomotif">Otomotif<br>
<input name="hobby[]" type="checkbox" value="Mancing">Memancing<br>
<input name="hobby[]" type="checkbox" value="Bermusik">Bermusik<br>
<input name="hobby[]" type="checkbox" value="Menyanyi">Menyanyi<br>
<input type="submit" value="Proses">
</form>
Hobby yang Kamu Pilih:<br>
<?php
$hobby=$_POST['hobby'];
$jumlah_hobby=count($hobby);
for($indeks=0; $indeks<$jumlah_hobby; $indeks++){
    echo"$hobby[$indeks] <br>";
}
?>