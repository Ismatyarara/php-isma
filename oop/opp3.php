<?php

class bangun_datar{
     

    public $luas1;
    public $luas2;
    public $luas3;
    public $luas4;


    public function menghitung_segitiga($alas,$tinggi){
        echo "luas segitiga <br>";
        echo " rumus : 1/2 x alas x tinggi <br>";
        echo "alas : $alas <br>";
        echo "tinggi : $tinggi <br>";
     
        //$hasil = 1/2* $alas * $tinggi;
        $this->luas1 = $alas * $tinggi;
     
        echo "hasil : $this->luas1<br>";
     }
     public function menghitung_persegi($sisi1,$sisi2){

        echo "luas persegi <br>";
        echo " rumus : sisi x sisi <br>";
        echo "sisi 1 : $sisi1 <br>";
        echo "sisi 2 : $sisi2 <br>";
     
        //$hasil = $sisi1 * $sisi2;
        $this->luas2 = 1/2 *$sisi1 * $sisi2;
     
        echo "hasil : $this->luas2 <br>";
     }
      public  function menghitung_persegipanjang($panjang,$lebar){

        echo "luas persegi panjang<br>";
        echo " rumus : panjang x lebar<br>";
        echo "panjang: $panjang <br>";
        echo "lebar : $lebar <br>";
     
        //$hasil = $panjang* $lebar;
        $this->luas3 = $panjang * $lebar;
     
        echo "hasil : $this->luas3 <br>";
     }
     public  function menghitung_lingkaran($jari1,$jari2){

        echo "luas lingkaran<br>";
        echo " rumus : pi x r x r <br>";
        echo " pi : 3.14 <br>";
        echo "jari jari 1 : $jari1 <br>";
        echo "jari jari 2 : $jari2 <br>";
     
       // $hasil = 3.14 *$jari1* $jari2;
       $this->luas4 = 3.14 * $jari1 *$jari2;
     
        echo "hasil : $this->luas4 <br>";
     }
    }

$cetak = new bangun_datar();

echo $cetak-> menghitung_segitiga(20,40);

echo "<hr>";

echo $cetak->menghitung_persegi(50,60);

echo "<hr>";

echo $cetak->menghitung_persegipanjang(44,9);

echo "<hr>";

echo $cetak->menghitung_lingkaran(30,8);













?>