<?php

$mahasiswa = [
        "001" => "Ahmad",
        "002" => "Budi",
        "003" => "Chika",
        "004" => "Dhini",
        "005" => "Erwin"];
        // Untuk memasukkan value, kita harus membuat key yang merepresentasikan valuenya
        // Tanda "=>" dapat diartikan sebagai "merujuk kepada"

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
 </head>
 <body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
            <li><?php echo "$nrp : $nama"; ?></li>
    <?php endforeach; ?>
 </body>
 </html>