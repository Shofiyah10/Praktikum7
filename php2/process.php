<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kata = $_POST['kata'];
    $jumlah_karakter = strlen($kata);
    
    echo "<h2>Hasil Perhitungan Karakter</h2>";
    echo "Kata yang dimasukkan: " . htmlspecialchars($kata) . "<br>";
    echo "Jumlah karakter: " . $jumlah_karakter . "<br>";
    echo "<a href='hitung.html'>Kembali</a>";
} else {
    header("Location: hitung.html");
    exit();
}
?>