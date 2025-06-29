<?php
function pangkat($angka, $pangkat) {
    $hasil = pow($angka, $pangkat); // Bisa juga pakai operator **
    echo "$angka pangkat $pangkat = $hasil";
}

// Contoh pemanggilan
pangkat(5, 4);
?>