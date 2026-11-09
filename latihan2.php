
<?php
$nama = "Siti";
$tugas = 89;
$uts = 98;
$uas = 96;

$nilaiAkhir = ($tugas * 0.40) + ($uts * 0.20) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}

echo "<h3>Hasil Perhitungan Nilai Mahasiswa</h3>";

echo "Nama: " . htmlspecialchars($nama) . "<br><br>";
echo "Nilai Tugas: " . $tugas . "<br><br>";
echo "Nilai UTS: " . $uts . "<br><br>";
echo "Nilai UAS: " . $uas . "<br><br>";
echo "Nilai Akhir: " . number_format($nilaiAkhir, 2) . "<br><br>";
echo "Predikat: " . $predikat;
?>
