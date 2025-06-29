<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 2c</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 2px;
        }

        .clear {
            clear: both;
        }

        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    // Jumlah baris
    $jumlahBaris = 5;

    for ($i = 1; $i <= $jumlahBaris; $i++) {
        // Cek ganjil atau genap
        $kelas = ($i % 2 == 0) ? 'genap' : 'ganjil';

        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak $kelas'>$j</div>";
        }
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>