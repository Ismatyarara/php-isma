<?php



//membuat class
class kucing{


    //method atau function

    public function __construct(){  //munculnya biasanya di atas ga ush di panggil
        echo "Haloo Saya duyung<br>";
    }

    public function makan(){
     echo "kucing suka makan daging";
    }
    public function minum(){
     echo "kucing suka minum susu dan air";
   }
    public function __destruct(){   //muncul di bawah
        echo "suara kucing miaw miaw miaw";
    }
}

//objeknya
 $cetak = new kucing(); //instansiasi = proses sebelum terjadinya objek

//  //memanggil menthod
//  echo $cetak->makan();
//  echo "<br>";
//  echo $cetak->minum();
//  echo "<br>";

 
?>




