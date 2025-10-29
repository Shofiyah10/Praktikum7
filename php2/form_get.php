<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="GET" action="" name="kalkulators">
        Bilangan 1: <input type="number" name="bilangan1" required><br><br>
        Bilangan 2: <input type="number" name="bilangan2" required><br><br>
        Operasi:
        <select name="operasi">
            <option value="tambah">Penambahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (*)</option>
            <option value="bagi">Pembagian (/)</option>
        </select>
        <br><br>
        <input type="submit" value="Hitung"><br><br>
    </form>
    
    <?php
    if(isset($_GET['bilangan1'], $_GET['bilangan2'], $_GET['operasi'])) {
        $bilangan1 = $_GET["bilangan1"];
        $bilangan2 = $_GET["bilangan2"];
        $operasi = $_GET["operasi"];
        $hasil = "";
        
        if ($operasi == "tambah") {
            $hasil = $bilangan1 + $bilangan2;
        } elseif ($operasi == "kurang") {
            $hasil = $bilangan1 - $bilangan2;
        } elseif ($operasi == "kali") {
            $hasil = $bilangan1 * $bilangan2;
        } elseif ($operasi == "bagi") {
            if ($bilangan2 != 0) {
                $hasil = $bilangan1 / $bilangan2;
            } else {
                $hasil = "Tidak dapat dibagi oleh 0";
            }
        }
        
        echo "Hasil perhitungan: $hasil";
    }
    ?>
</body>
</html>