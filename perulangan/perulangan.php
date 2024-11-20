<?php
//1.perulangan fortermasuk dalam counted loop, 
//karena kita bisa menentukan jumlah perulangannya

// for($i = 0; $i < 20; $i++){
//     echo "<h2>Ini perulangan ke-$i</h2>";
// }
//kurang dari kalo mu pas 20 pake =


//2.Perulangan while termasuk dalam uncounted loop.
//mengulang sesuatu yang belum jelas jumlah pengulangannya.
//jadi alurnya blm jls jadi di perjelas di bawa "++"

// $ulangi = 0;

// while($ulangi < 10){
//     echo "<p>Ini adalah perulangan ke-$ulangi</p>";
//     $ulangi++;
// }


// 3.Perulangan Do/While sama seperti perulangan while.
// Ia juga tergolong dalam uncounted loop.
// Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan.

// Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali,
// kemudian melakukan pengecekan kondisi.

// Sedangkan perulangan while akan mengecek kondisi terlebih dahulu, baru melakukan pengulangan.

// $ulangi = 10;

// do {
//     echo "<p>ini adalah perulangan ke-$ulangi</p>";
//     $ulangi--;
// } while ($ulangi > 1);


// Perulangan foreach sama seperti perulangan for. 
//Namun, ia lebih khusus digunakan untuk mencetak array.

// $books = [
//     "Panduan Belajar PHP untuk Pemula",
//     "Membangun Aplikasi Web dengan PHP",
//     "Tutorial PHP dan MySQL",
//     "Membuat Chat Bot dengan PHP"
// ];

// echo "<h5>Judul Buku PHP:</h5>";
// echo "<ul>";
// foreach($books as $buku){
//     echo "<li>$buku</li>";
// }
// echo "</ul>";

 ?>