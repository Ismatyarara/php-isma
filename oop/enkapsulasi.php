<?php

class contoh{

    public $nama= "dafa";

    public function perkenalan(){
        echo "Assalaamualaikum <br>";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();

echo $cetak->nama;











//publik di akses di luar sama di turunana
//private ga bisa 22nya
//prorected luar ga bisa turunan bisa
?>