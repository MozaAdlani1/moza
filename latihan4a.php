<?php
$warna = ["hijau", "kuning", "kelabu", "merah muda"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4a</title>
</head>
<body>
    <p>Balonku ada lima.</p>
    <p>Rupa-rupa warnanya: 
        <strong><?php echo implode(", ", $warna); ?></strong>, dan biru.
    </p>
    <p>Meletus balon <strong><?php echo $warna[0]; ?></strong> DOR!!!</p>
    <p>Hatiku sangat kacau.</p>
</body>
</html>