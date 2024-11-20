
<?php

function biodata($nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$hobi){

   
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat<br>";
    echo "Hobi: $hobi <br>";

    

    
}

biodata("isma","Bandung","09-08-07","Perempuan","Islam","Cilebak","Masak");

echo "<hr>";
//yang di dalam function yang kurung itu palameter yang hasil atau isi itu argumen



function menghitung($angka1,$angka2){

    echo "Bilangan ke 1 : $angka1 <br>";
    echo "Bilangan ke 2 : $angka2 <br>";

    $hasil = $angka1+$angka2;
    echo "Hasil : $hasil";
}

menghitung(20,50);
?>