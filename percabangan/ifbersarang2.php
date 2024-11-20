<?php

$provinsi = "jawa tengah";
$kota = "solo";

if ($provinsi == "jawa barat") {

      if ($kota == "bandung") {
        echo "selamat datang di kota bandung";
      }elseif ($kota == "cimahi") {
        echo "selamat datang di kota cimahi";
      }elseif ($kota == "bogor") {
        echo "selamat datang di kota bogor";
      }elseif ($kota == "bekasi") {
        echo "selamat datang di kota bekasi";
      }elseif ($kota == "depok") {
        echo "selamat datang di kota depok";
      }else {
        echo "ga ada kota ini";
      }



}elseif ($provinsi == "jawa timur") {

    if ($kota == "malang") {
        echo "selamat datang di kota malang";
      }elseif ($kota == "jember") {
        echo "selamat datang di kota jember";
      }elseif ($kota == "blitar") {
        echo "selamat datang di kota blitar";
      }elseif ($kota == "banyuwangi") {
        echo "selamat datang di kota banyuwangi";
      }elseif ($kota == "pacitan") {
        echo "selamat datang di kota ";
      }else {
        echo "ga ada kota ini";
      }


}elseif ($provinsi == "jawa tengah") {


    if ($kota == "solo") {
        echo "selamat datang di kota solo";
      }elseif ($kota == "jepara") {
        echo "selamat datang di kota jepara";
      }elseif ($kota == "salatiga") {
        echo "selamat datang di kota salatiga";
      }elseif ($kota == "surakarta") {
        echo "selamat datang di kota  surakarta";
      }elseif ($kota == "pekalongan") {
        echo "selamat datang di kota pekalongan";
      }else {
        echo "ga ada kota ini";
      }

}else {
    echo "tidak ada";
}

?>