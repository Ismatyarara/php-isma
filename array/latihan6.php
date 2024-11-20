<?php

$novel = [
    [
        "judul" => "Harry Potter",
        "penulis" => "J.K Rowling",
        "tanggal_rilis" => "26 Juni 1997",
        "penerbit" => "Bloomsbury"
    ],
    [
        "judul" => "The Lord the rings",
        "penulis" => "J.R.R Tolkien",
        "tanggal_rilis" => "26 Juli 1954",
        "penerbit" => "pride"
    ],
    [
        "judul" => "Bumi Manusia",
        "penulis" => "Pramoedya",
        "tanggal_rilis" => "1938",
        "penerbit" => "Hasta Mitra"
    ],
    [
        "judul" => "laskar pelangi",
        "penulis" => "andrea hirata",
        "tanggal_rilis" => "2005",
        "penerbit" => "bentang pustaka"
    ],
    [
        "judul" => "di bawah lindungan ka'bah",
        "penulis" => "hamka",
        "tanggal_rilis" => "1938",
        "penerbit" => "Balai pusaka"
    ],
];

foreach ($novel as $buku) {
    echo "Judul :".$buku["judul"]."<br>";
    echo "Penulis :".$buku["penulis"]."<br>";
    echo "Tanggal Rilis :".$buku["tanggal_rilis"]."<br>";
    echo "Penerbit :".$buku["penerbit"];
    echo "<hr>";
}




?>