<?php
$negaraASEAN = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4b</title>
</head>
<body>
    <h3>Daftar Negara ASEAN awal:</h3>
    <ul>
        <?php foreach ($negaraASEAN as $negara) {
            echo "<li>$negara</li>";
        } ?>
    </ul>
    <?php
    array_push($negaraASEAN, "Laos", "Filipina", "Myanmar");
    ?>
    <h3>Daftar Negara ASEAN baru:</h3>
    <ul>
        <?php foreach ($negaraASEAN as $negara) {
            echo "<li>$negara</li>";
        } ?>
    </ul>
</body>
</html>