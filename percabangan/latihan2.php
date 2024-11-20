<?php

$nama = "nioo";
$jenis_kelamin = "cwo";
$jenis = "minuman";
$menu = "jus";
$jumlah = "10";
$total_byr = "";
$nasi_goreng = 10000;
$mie_goreng = 15000;
$ayam_goreng = 20000;
$air_mineral = 5000;
$fresh_tea = 7000;
$jus = 12000;


if ($jenis == "makanan") {

if ($menu == "nasi goreng") {
 $harga = $nasi_goreng;
 $total = $harga * $jumlah;
}elseif ($menu == "mie goreng") {
    $harga = $mie_goreng;
    $total = $harga * $jumlah;
}elseif ($menu == "ayam goreng") {
    $harga = $ayam_goreng;
    $total = $harga * $jumlah;
}else {
    echo "menu tidak tersedia";
}


}elseif ($jenis == "minuman") {


if ($menu == "air mineral") {
    $harga = $air_mineral;
    $total = $harga * $jumlah;
}elseif ($menu == "fresh tea") {
    $harga = $fresh_tea;
    $total = $harga * $jumlah;
}elseif ($menu == "jus") {
    $harga = $jus;
    $total = $harga * $jumlah;
}else {
    echo " pesanan tidak tersedia";
}

}else {
    echo "TIDAK TERSEDIA";
}


echo "~~~RESTORAN RAME~~~ <br>";
echo "--------------------------------";
echo "<br>";
echo "Nama : $nama";
echo  "<br>";
echo "Jenis Kelamin : $jenis_kelamin";
echo "<br>";
echo "Jenis : $jenis";
echo "<br>";
echo "Menu : $menu";
echo "<br>";
echo "Harga : $harga";
echo "<br>";
echo "Jumlah : $jumlah";
echo "<br>";
echo "----------------------------------";
echo "<br>";
echo "Total : $total";
echo "<br>";
if ($total >= 50000) {
    $diskon = $total * 0.2;
    $total_byr = $total - $diskon;
    echo "diskon 20% : $diskon";
    echo "<br>";
echo "----------------------------------";
    echo "<br>";
    echo "total bayar : $total_byr";
 }else {
 echo "diskon 20% : -";
 echo "<br>";
 echo "total bayar : $total";
 }




?>