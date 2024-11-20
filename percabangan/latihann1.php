<?php

$nama = "Iaaa <3";
$kelas = "XI RPL 1";
$indonesia = 80;
$inggris= 85;
$matematika = 90;
$produktif = 95;
$rata = $indonesia + $inggris + $matematika + $produktif;
$rata = $rata / 4;

echo"Nama : $nama ";
echo"<br>";
echo"Kelas : $kelas ";
echo"<br>";
echo"B.Indonesia : $indonesia ";
echo"<br>";
echo"B.Inggris   : $inggris ";
echo"<br>";
echo"Matematika  : $matematika ";
echo"<br>";
echo"Produktif   : $produktif ";
echo"<br>";
echo"Rata Rata : $rata ";
echo"<br>";
echo"<hr>";

if ($rata > 75) {
    echo "Anda Lulus.....";
} else {
    echo "Anda Gagal.....";
}
?>


