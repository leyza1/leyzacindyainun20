<?php
// Input nilai
$nilai1 = 80;
$nilai2 = 90;
$nilai3 = 70;

// Hitung rata-rata
$rata = ($nilai1 + $nilai2 + $nilai3) / 3;

// Tampilkan hasil
echo "Nilai Ujian 1: $nilai1 <br>";
echo "Nilai Ujian 2: $nilai2 <br>";
echo "Nilai Ujian 3: $nilai3 <br>";
echo "<b>Rata-rata Nilai: " . number_format($rata, 2) . "</b>";
?>
