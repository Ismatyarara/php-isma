<?php

//membuat class
class kucing{


       //property atau atribut
       var $warna;
       var $jenis;


       //method atau function
       public function makan(){
        echo "kucing suka makan daging";
       }
      public function minum(){
        echo "kucing suka minum susu dan air";
      }
}

//objeknya
    $cetak = new kucing(); //instansiasi = proses sebelum terjadinya objek

    //memanggil menthod
    echo $cetak->makan();
    echo "<br>";
    echo $cetak->minum();
    echo "<br>";

    //memanggil property
    echo $cetak->warna = "hitam";
    echo "<br>";
    echo $cetak->jenis = "anggora";
?>