<?php

$siswa = [
    [
    "nama" => "Isma Tiara",
    "jenis_kelamin" => "Perempuan",
    "kelas" => "XI RPL 1"
    ],

    [
     "nama" => "Tiara",
     "jenis_kelamin" => "Perempuan",
     "kelas" => "XI RPL 2"
        ],
    
    ];

    foreach ($siswa as $murid) {
        echo "Nama :".$murid["nama"]."<br>";
        echo "Jenis Kelamin:".$murid["jenis_kelamin"]."<br>";
        echo "Kelas :".$murid["kelas"]."<br>";
    }

?>