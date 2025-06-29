<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3a</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
function ganti_style($tulisan, $kelas) {
    return "<p class=\"$kelas\">$tulisan</p>";
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>

</body>
</html>