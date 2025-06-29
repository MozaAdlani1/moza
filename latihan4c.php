<?php
$negaraASEAN = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4c</title>
</head>
<body>
    <h3>Daftar Negara ASEAN dan Ibukota:</h3>
    <ul>
        <?php foreach ($negaraASEAN as $negara => $ibukota) {
            echo "<li>$negara: $ibukota</li>";
        } ?>
    </ul>
</body>
</html>