<?php
$dataJSON ='[
    {
        "no" : "1001",
        "judul": "Laskar Pelangi",
        "genre" : "Drama, Pendidikan",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tahun_liris" : "2005"
    },
    {
        "no" : "1002",
        "judul": "Hujan",
        "genre" : "Fiksi",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_liris" : "2015"
    },
    {
        "no" : "1003",
        "judul": "Bumi Manusia",
        "genre" : "Sejarah, Sastra",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Lentera",
        "tahun_liris" : "1980"
    },
    {
        "no" : "1004",
        "judul": "Perahu Kertas",
        "genre" : "Romansa, Drama",
        "penulis" : "Dee Lestari",
        "penerbit" : "Bentang Pustaka",
        "tahun_liris" : "2009"
    },
    {
        "no" : "1005",
        "judul": "Orang-Orang Biasa",
        "genre" : "Drama",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tahun_liris" : "2019"
    },
    {
        "no" : "1006",
        "judul": "Life of Pi",
        "genre" : "Adventure",
        "penulis" : "Yann Martel",
        "penerbit" : "Knopf Canada",
        "tahun_liris" : "2001"
    },
    {
        "no" : "1007",
        "judul": "Siti Nurbaya",
        "genre" : "Romansa",
        "penulis" : "Marah Rusli",
        "penerbit" : "Balai Pustaka",
        "tahun_liris" : "1922"
    },
    {
        "no" : "1008",
        "judul": "Pulang",
        "genre" : "Perjalanan",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_liris" : "2016"
    },
    {
        "no" : "1009",
        "judul": "5 CM",
        "genre" : "Fiksi, Motivasi",
        "penulis" : "Donny Dhirgantoro",
        "penerbit" : "Grasindo",
        "tahun_liris" : "2005"
    },
    {
        "no" : "1010",
        "judul": "Rindu",
        "genre" : "Romansa",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_liris" : "2013"
    },
    {
        "no" : "1011",
        "judul": "Negeri 5 Menara",
        "genre" : "Pendidikan, Inspirasi",
        "penulis" : "Ahmad Fuadi",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_liris" : "2009"
    },
    {
        "no" : "1012",
        "judul": "Cinta dan Rindu",
        "genre" : "Romansa",
        "penulis" : "Ika Natassa",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_liris" : "2005"
    }
]';

$novel = json_decode($dataJSON);
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
         <td>No</td>
         <td>Judul</td>
         <td>Genre</td>
         <td>Penulis</td>
         <td>Penerbit</td>
         <td>Tahun Liris</td>
        </tr>
        <?php foreach ($novel as $buku) : ?>
        <tr>
         <td><?php echo $buku->no; ?></td>
         <td><?php echo $buku->judul; ?></td>
         <td><?php echo $buku->genre; ?></td>
         <td><?php echo $buku->penulis; ?></td>
         <td><?php echo $buku->penerbit; ?></td>
         <td><?php echo $buku->tahun_liris; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
   </center>
</body>
</html>
