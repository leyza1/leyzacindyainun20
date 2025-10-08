<?php
$teman = [
    ["nama" => "Alya", "umur" => 17, "hobi" => "Membaca"],
    ["nama" => "Rafi", "umur" => 18, "hobi" => "Sepak Bola"],
    ["nama" => "Citra", "umur" => 17, "hobi" => "Bernyanyi"],
    ["nama" => "Dewi", "umur" => 16, "hobi" => "Menulis"],
    ["nama" => "Bima", "umur" => 18, "hobi" => "Bermain Game"]
];
?>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Hobi</th>
    </tr>
    <?php foreach ($teman as $t): ?>
    <tr>
        <td><?= $t["nama"] ?></td>
        <td><?= $t["umur"] ?></td>
        <td><?= $t["hobi"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
