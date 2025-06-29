<?php

$GLOBALS['varGlobal'] =18;

function testVar()
{
    $varlokal = 1; //variabel lokal 
    echo "<p> test variabel didalam function.<p>";
    echo "variabel global : " .$GLOBALS['varGlobal'];
    echo "<br>";
    echo "variabel lokal : $varlokal ";
    echo "<br>";
}

testvar();

    echo "<p> test variabel didalam function.<p>";
    echo "Variabel global : $varGlobal ";
    echo "<br>";
    echo "variabel lokal : $varlokal ";
    echo "<br>";

 ?>