<?php
// Corrected JSON data
$dataJSON = '[
    {
        "no": "1001",
        "judul": "Laskar Pelangi",
        "genre": "Drama, Pendidikan",
        "penulis": "Andrea Hirata",
        "penerbit": "Bentang Pustaka",
        "tahun_liris": "2005"
    },
    {
        "no": "1002",
        "judul": "Hujan",
        "genre": "Fiksi",
        "penulis": "Tare Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2015"
    },
    {
        "no": "1003",
        "judul": "Bumi Manusia",
        "genre": "Sejarah, Sastra",
        "penulis": "Pramoedya Ananta Toer",
        "penerbit": "Lentera",
        "tahun_liris": "1980"
    },
    {
        "no": "1004",
        "judul": "Perahu Kertas",
        "genre": "Romansa, Drama",
        "penulis": "Dee Lestari",
        "penerbit": "Bentang Pustaka",
        "tahun_liris": "2009"
    },
    {
        "no": "1005",
        "judul": "Orang Orang Biasa",
        "genre": "Drama",
        "penulis": "Andrea Hinata",
        "penerbit": "Bentang Pustaka",
        "tahun_liris": "2009"
    },
    {
        "no": "1006",
        "judul": "Life of Pi",
        "genre": "Adventure",
        "penulis": "Yann Martel",
        "penerbit": "Knopf Canada",
        "tahun_liris": "2001"
    },
    {
        "no": "1007",
        "judul": "Siti Nurbaya",
        "genre": "Romansa",
        "penulis": "Marah Rusli",
        "penerbit": "Balai Pustaka",
        "tahun_liris": "1922"
    },
    {
        "no": "1008",
        "judul": "Pulang",
        "genre": "Perjalanan",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2016"
    },
    {
        "no": "1009",
        "judul": "5 CM",
        "genre": "Fiksi, Motivasi",
        "penulis": "Donny",
        "penerbit": "Grasindo",
        "tahun_liris": "2005"
    },
    {
        "no": "1010",
        "judul": "Rindu",
        "genre": "Romansa",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2013"
    },
    {
        "no": "1011",
        "judul": "Negeri 5 Menara",
        "genre": "Pendidikan, Inspirasi",
        "penulis": "Ahmad Fuadi",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2009"
    },
    {
        "no": "1012",
        "judul": "Cinta Dan Rindu",
        "genre": "Romansa",
        "penulis": "Ika Natassa",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2005"
    },
    {
        "no": "1013",
        "judul": "Sang Pemimpi",
        "genre": "Drama, Inspirasi",
        "penulis": "Andrea Hinata",
        "penerbit": "Bentang Pustaka",
        "tahun_liris": "2006"
    },
    {
        "no": "1014",
        "judul": "Keluarga Cemara",
        "genre": "Drama",
        "penulis": "Arswendo",
        "penerbit": "Pustaka Jaya",
        "tahun_liris": "1993"
    },
    {
        "no": "1015",
        "judul": "Beach Read",
        "genre": "Romance",
        "penulis": "Emily Henry",
        "penerbit": "Berkley",
        "tahun_liris": "2020"
    },
    {
        "no": "1016",
        "judul": "Brida",
        "genre": "Romansa",
        "penulis": "Paulo Coelho",
        "penerbit": "Harper Collins",
        "tahun_liris": "1990"
    },
    {
        "no": "1017",
        "judul": "One Day",
        "genre": "Romance",
        "penulis": "David Nicholls",
        "penerbit": "Hodder",
        "tahun_liris": "2009"
    },
    {
        "no": "1018",
        "judul": "Catatan Akhir Sekolah",
        "genre": "Drama",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2015"
    },
    {
        "no": "1019",
        "judul": "Malaikat Juga Tahu",
        "genre": "Drama",
        "penulis": "Kurniawan Gunadi",
        "penerbit": "Republika",
        "tahun_liris": "2004"
    },
    {
        "no": "1020",
        "judul": "Hujan Di Ujung Tahun",
        "genre": "Drama",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_liris": "2017"
    }
]';

// Convert the JSON string to a PHP array
$novels = json_decode($dataJSON);

// Check for JSON decoding errors
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error in JSON data: " . json_last_error_msg());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Novel</title>
</head>
<body>
    <center>
        <h2>Kumpulan Novel</h2>
        <table border="1" cellspacing="1">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Liris</th>
            </tr>
            <?php
            // Loop through the novels and create table rows
            foreach ($novels as $novel) {
                echo "<tr>";
                echo "<td>{$novel->no}</td>";
                echo "<td>{$novel->judul}</td>";
                echo "<td>{$novel->genre}</td>";
                echo "<td>{$novel->penulis}</td>";
                echo "<td>{$novel->penerbit}</td>";
                echo "<td>{$novel->tahun_liris}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>
</html>
