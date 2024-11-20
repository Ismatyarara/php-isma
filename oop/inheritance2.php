<?php

class bangun_datar{

    public $luas_segitiga;
    public $luas_persegi;
    public $luas_persegi_panjang;
    public $luas_lingkaran;
    public $keliling_segitiga;
    public $keliling_persegi;
    public $keliling_persegi_panjang;
    public $keliling_lingkaran;
}

class luas extends bangun_datar{

      public function menghitung_segitiga($alas,$tinggi){
        echo "<b>luas segitiga </b><br>";
        echo " rumus : 1/2 x alas x tinggi <br>";
        echo "alas : $alas <br>";
        echo "tinggi : $tinggi <br>";
     
        //$hasil = 1/2* $alas * $tinggi;
     
        $this->luas_segitiga =  1/2* $alas * $tinggi;
        echo "hasil : $this->luas_segitiga <br>";
}
    public function menghitung_persegi($sisi1,$sisi2){

    echo "<b>luas persegi</b> <br>";
    echo " rumus : sisi x sisi <br>";
    echo "sisi 1 : $sisi1 <br>";
    echo "sisi 2 : $sisi2 <br>";
     
    $this->luas_persegi = $sisi1 * $sisi2;
    //$hasil = $sisi1 * $sisi2;
 
    echo "hasil : $this->luas_persegi <br>";
 }
    public function menghitung_persegipanjang($panjang,$lebar){

    echo "<b>luas persegi panjang</b><br>";
    echo " rumus : panjang x lebar<br>";
    echo "panjang: $panjang <br>";
    echo "lebar : $lebar <br>";
 
    //$hasil = $panjang* $lebar;
     $this->luas_persegi_panjang = $panjang* $lebar;

    echo "hasil : $this->luas_persegi_panjang <br>";
}
    public function menghitung_lingkaran($jari1,$jari2){

    echo "<b>luas lingkaran </b><br>";
    echo " rumus : pi x r x r <br>";
    echo " pi : 3.14 <br>";
    echo "jari jari 1 : $jari1 <br>";
    echo "jari jari 2 : $jari2 <br>";
 
    //$hasil = 3.14 *$jari1* $jari2;
    $this->luas_lingkaran =  3.14 *$jari1* $jari2;
 
    echo "hasil : $this->luas_lingkaran <br>";
 }
}
   class keliling extends bangun_datar{

      public function menghitung_keliling_segitiga($a,$b,$c){
        echo "<b>keliling segitiga</b><br>";
        echo " rumus : a+b+c <br>";
        echo "sisi a : $a <br>";
        echo "sisi b :$b<br>";
        echo "sisi c : $c<br>";

        $this->keliling_segitiga = $a + $b +$c;

        echo " hasil : $this->keliling_segitiga<br>";
      }
      public function  menghitung_keliling_persegi($sisi){
        echo "<b>keliling persegi</b><br>";
        echo " rumus : 4 x sisi <br>";
        echo "sisi  : $sisi<br>";
    

        $this->keliling_persegi = 4 * $sisi;

        echo " hasil : $this->keliling_persegi<br>";
      }
    
      public function  menghitung_keliling_persegi_panjang($panjang,$lebar){
      echo "<b>keliling persegi panjang</b><br>";
      echo " rumus : 2 x (panjang +lebar)<br>";
      echo "panjang  : $panjang<br>";
      echo "lebar : $lebar <br>";
  

      $this->keliling_persegi_panjang = 2 * $panjang + $lebar;

      echo " hasil : $this->keliling_persegi_panjang<br>";
    }
      public function menghitung_lingkaran($jari){

        echo "<b>keliling lingkaran</b><br>";
        echo " rumus : 2 x phi x r <br>";
        echo " pi : 3.14 <br>";
        echo "jari jari  : $jari <br>";
     
        //$hasil = 3.14 *$jari1* $jari2;
      $this->keliling_lingkaran = 2 * 3.14 * $jari;

        echo "hasil : $this->keliling_lingkaran <br>";
     }
   }

$cetak = new luas();

echo $cetak->menghitung_segitiga(12,45);

echo "<hr>";

echo $cetak->menghitung_persegi(25,24);

echo "<hr>";

echo $cetak->menghitung_persegipanjang(12,20);

echo "<hr>";

echo $cetak->menghitung_lingkaran(11,1);

echo "<hr>";

$cetak2 = new keliling();

echo $cetak2 ->menghitung_keliling_segitiga(3,4,5);

echo "<hr>";

echo $cetak2 ->menghitung_keliling_persegi(12);

echo "<hr>";

echo $cetak2->menghitung_keliling_persegi_panjang(15,28);

echo "<hr>";

echo $cetak2->menghitung_lingkaran(23);


















?>