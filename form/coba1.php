<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
   <form action="" method="POST">
    <h2>Nilai-Nilai Nasional</h2>
    <table>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value=""></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name ="jurusan" id="jurusan" name="jurusan">
            <option value="rpl">RPL</option>
            <option value="tkro">TKRO</option>
            <option value="tbsm">TBSM</option>
        </select></td>
        </tr>
        <tr>
            <td><br><b>Nilai Ujian</b></td>
        </tr>
        <tr>
            <td>Nilai Bahasa.Indonesia</td>
            <td>:</td>
            <td><input type="number" name="bahasa_indonesia"></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td>:</td>
            <td><input type="number" name="bahasa_inggris"></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>:</td>
            <td><input type="number" name="mtk"></td>
        </tr>
        <tr>
            <td>Nilai Produktif</td>
            <td>:</td>
            <td><input type="number" name="produktif"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="simpan">
            </td>
        </tr>
    </table>
   </form> 
   </center>
</body>
</html>



<?php
if (isset($_POST['proses'])) {
    
$nama3 = $_POST['nama'];
$kelas3 = $_POST['kelas'];
$jurusan3 = $_POST['jurusan'];
$bahasa_indonesia3 = $_POST['bahasa_indonesia'];
$bahasa_inggris3 = $_POST['bahasa_inggris'];
$mtk3 = $_POST['mtk'];
$produktif3 = $_POST['produktif'];


$rata = $bahasa_indonesia3 + $bahasa_inggris3 + $mtk3 + $produktif3;
$rata = $rata / 4;


echo "<center>";
echo "<br>";
echo "NILAI UJIAN NASIONAL <br>";
echo "<br>";
echo "Nama : $nama3 <br>";
echo "Kelas: $kelas3 <br>";
echo "Jurusan: $jurusan3 <br>";
echo "Nilai Bahasa Indonesia: $bahasa_indonesia3 <br>";
echo "Nilai Bahasa Inggris : $bahasa_inggris3 <br>";
echo "Matematika : $mtk3 <br>";
echo "Produktif: $produktif3 <br>";
echo "<center>";
echo "<br>";
}
if ($rata > 75) {
    echo "TUNTAS!!";
} else {
    echo "BELUM TUNTAS!!";
}

?>












