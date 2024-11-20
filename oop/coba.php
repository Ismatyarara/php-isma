<?php

 class seblak{


    public function kering(){
       echo " seblak keringgg" ;
    }
    public function kuah(){
        echo "seblak kuah";
    }
 }

 $cetak = new seblak();

 echo $cetak ->kering();
 echo "<br>";
 echo $cetak ->kuah();
?>