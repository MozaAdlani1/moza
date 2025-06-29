<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    echo "Faktorial dari $a = $hasil";
}

// Contoh pemanggilan
faktorial(5);
?>