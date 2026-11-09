<?php

function hitungRataRata($tugas, $uts, $uas) {
    return ($tugas + $uts + $uas) / 3;
}

function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

$dataNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
$kata = trim($_GET["kata"] ?? "");
$hasil = [];

if ($kata !== "") {
    foreach ($dataNama as $nama) {
        if (stripos($nama, $kata) !== false) {
            $hasil[] = $nama;
        }
    }
}

$rata = hitungRataRata(85, 78, 90);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen Mandiri</title>
</head>
<body>
    <h2>Eksperimen Mandiri</h2>

    <h3>1. Rata-rata Nilai</h3>
    <p>Tugas: 85 | UTS: 78 | UAS: 90</p>
    <p>Rata-rata: <?= number_format($rata, 2) ?></p>

    <h3>2. Cari Nama (GET)</h3>
    <form method="GET" action="">
        <input type="text" name="kata" value="<?= htmlspecialchars($kata, ENT_QUOTES, "UTF-8") ?>">
        <button type="submit">Cari</button>
    </form>
    <?php if ($kata !== ""): ?>
        <?php if ($hasil): ?>
            <p>Ditemukan <?= count($hasil) ?> nama:</p>
            <ul>
                <?php foreach ($hasil as $h): ?>
                    <li><?= htmlspecialchars($h, ENT_QUOTES, "UTF-8") ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nama tidak ditemukan.</p>
        <?php endif; ?>
    <?php endif; ?>

    <h3>3. Format Rupiah</h3>
    <p>1250000 menjadi <?= formatRupiah(1250000) ?></p>
    <p>75000 menjadi <?= formatRupiah(75000) ?></p>
</body>
</html>