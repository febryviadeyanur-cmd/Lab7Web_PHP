<?php

function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

function tentukanKelulusan($nilai) {
    return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
}

$hargaAkhir = hitungDiskon(150000, 10);
$luas = hitungLuasPersegiPanjang(8, 4);
$status = tentukanKelulusan(75);

echo "<h3>Hasil Praktikum Function PHP</h3>";

echo "<b>1. Perhitungan Diskon</b><br><br>";
echo "Harga awal: Rp150.000<br>";
echo "Diskon: 10%<br>";
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br><br>";

echo "<b>2. Menghitung Luas Persegi Panjang</b><br><br>";
echo "Panjang: 8<br>";
echo "Lebar: 4<br>";
echo "Luas: " . $luas . "<br><br>";

echo "<b>3. Menentukan Kelulusan</b><br><br>";
echo "Nilai: 75<br>";
echo "Status: " . $status;
?>
