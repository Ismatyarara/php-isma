

<?php

$data = [
    [
        "Nama" => "ga tau",
        "buah" => [
            [
                "Nama Buah"  => "Anggur",
                "buahku" => [
                    "jenis1" =>"Anggur Hijau",
                    "jenis2" => "Anggur Putih"
                    ]
            ]
        ]
    ],
    [
        "Nama" => "napa",
        "buah" => [
            [
                "Nama Buah"  => "Alpukat",
                "buahku" => [
                    "jenis1" =>"Alpukat Mentega",
                    "jenis2" => "Alpukat Biasa"]
            ],
            [
                "Nama Buah"  => "Apel",
                "buahku" => [
                    "jenis1" => "Apel Merah", 
                    "jenis2" => "Apel Hijau"
                ]
            ]
        ]
    ],
];

foreach ($data as $buahaku) {
    echo "Nama Pemilik : " . $buahaku["Nama"] . "<br>";
    echo "Daftar Buah Kesukaan : <ul>";

    foreach ($buahaku["buah"] as $buah) {
        echo "<li>" . $buah["Nama Buah"] . "</li>";
            echo "<ul>";

            foreach ($buah["buahku"] as $buahku) {
                echo "<li>" . $buahku . "</li>";

            }
            echo "</ul>";
        
    }
    echo "</ul>";
    echo "<hr>";
 }


?>   

