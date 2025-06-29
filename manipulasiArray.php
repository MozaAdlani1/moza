<?php

$hari = ["Senin", "Selasa", "Rabu"];

echo "array awal : ";
print_r($hari);
echo "<hr>";

echo "array setelah di pop : ";
// Menghapus atau mengambil elemen terakhir dari array
$hasil = array_pop($hari);
print_r($hari);
echo "<br>elemen yang di pop : $hasil<hr>";

echo "array setelah di push : ";
// Menambah beberapa elemen pada akhir array
$hasil = array_push($hari, "Kamis", "Jumat");
print_r($hari);
echo "<hr>";

echo "array setelah di shift : ";
// Menghapus atau mengambil elemen pertama dari array
$hasil = array_shift($hari);
print_r($hari);
echo "<br>elemen yang di shift : $hasil <hr>";

echo "array setelah di unshift : ";
// Menambah beberapa elemen pada awal array
$hasil = array_unshift($hari, "elemen", "ditambahkan");
print_r($hari);

 ?>