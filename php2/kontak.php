<?php
// Membuat array asosiatif informasi kontak
$kontak = array(
    array(
        "nama" => "Ahmad Rizki",
        "email" => "ahmad.rizki@email.com",
        "telepon" => "081234567890"
    ),
    array(
        "nama" => "Siti Nurhaliza",
        "email" => "siti.nurhaliza@email.com", 
        "telepon" => "082345678901"
    ),
    array(
        "nama" => "Budi Santoso",
        "email" => "budi.santoso@email.com",
        "telepon" => "083456789012"
    )
);

// Menampilkan informasi kontak
echo "<h2>Informasi Kontak</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Telepon</th></tr>";

foreach ($kontak as $index => $data) {
    $no = $index + 1;
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>" . $data['nama'] . "</td>";
    echo "<td>" . $data['email'] . "</td>";
    echo "<td>" . $data['telepon'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>