<?php
// Fungsi-fungsi operasi
function penjumlahan($a, $b) {
    return $a + $b;
}

function pengurangan($a, $b) {
    return $a - $b;
}

function perkalian($a, $b) {
    return $a * $b;
}

function pembagian($a, $b) {
    if ($b == 0) {
        return "Error: Tidak bisa dibagi nol!";
    }
    return $a / $b;
}

// Inisialisasi variabel
$bilangan1 = "";
$bilangan2 = "";
$hasil = "";
$operasi = "";

// Proses form jika ada data yang dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    
    if (is_numeric($bilangan1) && is_numeric($bilangan2)) {
        if (isset($_POST['tambah'])) {
            $hasil = penjumlahan($bilangan1, $bilangan2);
            $operasi = "Penjumlahan";
        } elseif (isset($_POST['kurang'])) {
            $hasil = pengurangan($bilangan1, $bilangan2);
            $operasi = "Pengurangan";
        } elseif (isset($_POST['kali'])) {
            $hasil = perkalian($bilangan1, $bilangan2);
            $operasi = "Perkalian";
        } elseif (isset($_POST['bagi'])) {
            $hasil = pembagian($bilangan1, $bilangan2);
            $operasi = "Pembagian";
        }
    } else {
        $hasil = "Error: Masukkan angka yang valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        .container {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #000;
        }
        input[type="number"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #000;
        }
        button {
            padding: 8px 15px;
            border: 1px solid #000;
            background-color: white;
            cursor: pointer;
        }
        .buttons {
            margin: 15px 0;
            padding: 15px 0;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Sederhana</h2>
        
        <form method="POST" action="">
            <p>
                <label>Bilangan 1:</label><br>
                <input type="number" name="bilangan1" value="<?php echo $bilangan1; ?>" required>
            </p>
            
            <p>
                <label>Bilangan 2:</label><br>
                <input type="number" name="bilangan2" value="<?php echo $bilangan2; ?>" required>
            </p>
            
            <div class="buttons">
                <button type="submit" name="tambah">Penjumlahan</button>
                <button type="submit" name="kurang">Pengurangan</button>
                <button type="submit" name="kali">Perkalian</button>
                <button type="submit" name="bagi">Pembagian</button>
            </div>
        </form>
        
        <?php if ($hasil !== ""): ?>
        <div class="result">
            <strong>Hasil perhitungan:</strong><br>
            <?php 
            if ($operasi !== "") {
                $symbol = "";
                switch($operasi) {
                    case "Penjumlahan": $symbol = "+"; break;
                    case "Pengurangan": $symbol = "-"; break;
                    case "Perkalian": $symbol = "×"; break;
                    case "Pembagian": $symbol = "÷"; break;
                }
                echo "$operasi: $bilangan1 $symbol $bilangan2 = $hasil";
            } else {
                echo $hasil;
            }
            ?>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>