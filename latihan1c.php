<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            border: 1px solid black;
            text-align: center;
            line-height: 40px;
            display: inline-block;
            margin: 2px;
            font-weight: bold;
        }
        .baris {
            height: 45px;
        }
    </style>
</head>
<body>

<?php
$a = "A";
$b = "B";
$c = "C";
?>

<div class="baris">
    <div class="kotak"><?= $a ?></div>
</div>
<div class="baris">
    <div class="kotak"><?= $a ?></div>
    <div class="kotak"><?= $b ?></div>
</div>
<div class="baris">
    <div class="kotak"><?= $a ?></div>
    <div class="kotak"><?= $b ?></div>
    <div class="kotak"><?= $c ?></div>
</div>

</body>
</html>