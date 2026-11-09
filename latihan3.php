<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Yuri", "Milo", "Hiro"];

echo "<h3>Daftar Mahasiswa</h3>";
echo "<ol style='line-height: 2;'>";

foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}

echo "</ol>";

echo "Jumlah Mahasiswa: " . count($mahasiswa) . " orang";
?>
