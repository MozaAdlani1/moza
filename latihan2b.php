<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: white;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    // Menentukan jumlah baris
    $jumlahBaris = 5;

    // Loop untuk baris
    for ($i = 1; $i <= $jumlahBaris; $i++) {
        // Loop untuk kolom yang mengikuti nomor baris
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<div class='clear'></div>"; // Clear float setiap baris
    }
    ?>
</body>
</html>