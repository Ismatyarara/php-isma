<?php

function menghitung_segitiga($alas,$tinggi){
   echo "luas segitiga <br>";
   echo " rumus : 1/2 x alas x tinggi <br>";
   echo "alas : $alas <br>";
   echo "tinggi : $tinggi <br>";

   $hasil = 1/2* $alas * $tinggi;

   echo "hasil : $hasil <br>";
}
 
menghitung_segitiga(30,15);

echo "<hr>";

function menghitung_persegi($sisi1,$sisi2){

    echo "luas persegi <br>";
    echo " rumus : sisi x sisi <br>";
    echo "sisi 1 : $sisi1 <br>";
    echo "sisi 2 : $sisi2 <br>";
 
    $hasil = $sisi1 * $sisi2;
 
    echo "hasil : $hasil <br>";
 }
  
 menghitung_persegi(6,12);
 
 echo "<hr>";
 


 function menghitung_persegipanjang($panjang,$lebar){

    echo "luas persegi panjang<br>";
    echo " rumus : panjang x lebar<br>";
    echo "panjang: $panjang <br>";
    echo "lebar : $lebar <br>";
 
    $hasil = $panjang* $lebar;
 
    echo "hasil : $hasil <br>";
 }
  
 menghitung_persegipanjang(10,12);
 
 echo "<hr>";
 
 function menghitung_lingkaran($jari1,$jari2){

    echo "luas lingkaran<br>";
    echo " rumus : pi x r x r <br>";
    echo " pi : 3.14 <br>";
    echo "jari jari 1 : $jari1 <br>";
    echo "jari jari 2 : $jari2 <br>";
 
    $hasil = 3.14 *$jari1* $jari2;
 
    echo "hasil : $hasil <br>";
 }
  
 menghitung_lingkaran(11,15,12);
 
 echo "<hr>";
?>