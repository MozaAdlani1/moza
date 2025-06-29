<?php
$dataNegara = [
    [
        "Negara" => "Indonesia",
        "Ibukota" => "D.K.I. Jakarta",
        "Kode Telepon" => "+62"
    ],
    [
        "Negara" => "Singapura",
        "Ibukota" => "Singapura",
        "Kode Telepon" => "+65"
    ],
    [
        "Negara" => "Malaysia",
        "Ibukota" => "Kuala Lumpur",
        "Kode Telepon" => "+60"
    ],
    [
        "Negara" => "Brunei",
        "Ibukota" => "Bandar Seri Begawan",
        "Kode Telepon" => "+673"
    ],
    [
        "Negara" => "Thailand",
        "Ibukota" => "Bangkok",
        "Kode Telepon" => "+66"
    ],
    [
        "Negara" => "Laos",
        "Ibukota" => "Vientiane",
        "Kode Telepon" => "+856"
    ],
    [
        "Negara" => "Filipina",
        "Ibukota" => "Manila",
        "Kode Telepon" => "+63"
    ],
    [
        "Negara" => "Myanmar",
        "Ibukota" => "Naypyidaw",
        "Kode Telepon" => "+95"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4d</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Negara</th>
            <th>Ibukota</th>
            <th>Kode Telepon</th>
        </tr>
        <?php foreach ($dataNegara as $negara): ?>
            <tr>
                <td><?php echo $negara["Negara"]; ?></td>
                <td><?php echo $negara["Ibukota"]; ?></td>
                <td><?php echo $negara["Kode Telepon"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>