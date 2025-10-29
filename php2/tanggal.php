<?php
// Mendapatkan tanggal dan waktu saat ini
$tanggal_waktu = date("Y m d");

// Mendapatkan hari dalam bahasa Indonesia
$hari = date("l");
$hari_indonesia = [
    "Sunday" => "Minggu",
    "Monday" => "Senin",
    "Tuesday" => "Selasa",
    "Wednesday" => "Rabu",
    "Thursday" => "Kamis",
    "Friday" => "Jumat",
    "Saturday" => "Sabtu"
];
$hari_terjemahan = $hari_indonesia[$hari];

// Format tanggal dalam bahasa Indonesia
$tanggal = date("d F Y");

// Menampilkan hasil
echo "Tanggal dan waktu saat ini: $tanggal_waktu<br>";
echo "Hari ini adalah: $hari_terjemahan<br>";
echo "Tanggal hari ini dalam format Indonesia: $tanggal";
?>