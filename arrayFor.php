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

        for ($i = 0; $i < count($nama); $i++) { 
                                                         // count() berguna untuk menentukan jumlah elemen pada array
                                                         // sehingga looping berhenti ketika semua elemen array telah ditampilkan
            echo "<li>$nama[$i]</li>";
        }
    
     ?>  
</body>
</html>