<?php
echo "<h2>Perbedaan isset() dan empty()</h2>";

// Contoh variabel
$nama = "";
$umur = 0;
$alamat = "Jl. Mawar";

// Penjelasan dan output
echo "<p><b>\$nama = \"\"</b></p>";
echo "isset(\$nama): " . (isset($nama) ? "true" : "false") . "<br>";
echo "empty(\$nama): " . (empty($nama) ? "true" : "false") . "<br><br>";

echo "<p><b>\$umur = 0</b></p>";
echo "isset(\$umur): " . (isset($umur) ? "true" : "false") . "<br>";
echo "empty(\$umur): " . (empty($umur) ? "true" : "false") . "<br><br>";

echo "<p><b>\$alamat = \"Jl. Mawar\"</b></p>";
echo "isset(\$alamat): " . (isset($alamat) ? "true" : "false") . "<br>";
echo "empty(\$alamat): " . (empty($alamat) ? "true" : "false") . "<br><br>";

echo "<h3>Penjelasan:</h3>";
echo "<ul>
<li><b>isset()</b> memeriksa apakah suatu variabel sudah diset dan tidak NULL.</li>
<li><b>empty()</b> memeriksa apakah variabel kosong (seperti '', 0, '0', NULL, false, array kosong).</li>
</ul>";
?>