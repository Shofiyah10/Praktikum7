<?php
// Menggabungkan beberapa fungsi untuk pengolahan string

// String input
$teks = " Ini adalah contoh string. ";

// Menghitung panjang string
$panjang = strlen($teks);

// Mengubah ke huruf besar
$teks_besar = strtoupper($teks);

// Mengambil potongan string
$potongan = substr($teks_besar, 8, 12);

// Output hasil pengolahan
echo "String input: $teks<br>";
echo "Panjang string: $panjang<br>";
echo "String menjadi huruf besar: $teks_besar<br>";
echo "Potongan string: $potongan";
?>