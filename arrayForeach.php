<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
    <?php

        foreach ($nama as $absen) { // foreach akan otomatis menampilkan semua elemen array
            echo "<li>$absen</li>";
        }

     ?>
</body>
</html>