<?php

$siswa= [
    [
     "nish" => "1001",
    "nama" =>"Haddad",
    "kelas"=>"11 RPL 3",
    "eskul"=> ["futsal","basket","renang"]
   
    ],
    [
        "nish" => "1002",
        "nama" =>"sandi",
        "kelas"=>"11 RPL 1",
        "eskul"=> ["futsal"] 
    ],
    ];

    

foreach ($siswa as $murid) {
    echo "Nish :".$murid["nish"]."<br>";
    echo "Nama:".$murid["nama"]."<br>";
    echo "Kelas :".$murid["kelas"]."<br>";
    echo "Eskul  <ul>";
    foreach ($murid ["eskul"] as $siswa) {
        echo "<ul>".$siswa. "</ul>";
    }
    echo "</ul>";
    echo "<hr>";
}
?>