<?php
function cekPrima($angka) {
    if ($angka <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    return true;
}

// Contoh penggunaan
$bilangan = 17;
if (cekPrima($bilangan)) {
    echo "$bilangan adalah bilangan prima";
} else {
    echo "$bilangan bukan bilangan prima";
}
?>
