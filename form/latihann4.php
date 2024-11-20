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
echo "<table>
    <tr>
        <td>Nama </td>
        <td>:</td>
        <td>$nama3</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$kelas3</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>$jurusan3</td>
    </tr>
    <tr>
        <td>Nilai Indonesia</td>
        <td>:</td>
        <td>$bahasa_indonesia3</td>
    </tr>
    <tr>
        <td>Nilai Inggris</td>
        <td>:</td>
        <td>$bahasa_inggris3</td>
    </tr>
    <tr>
        <td>Nilai Matematika</td>
        <td>:</td>
        <td>$mtk3</td>
    </tr>
    <tr>
        <td>Nilai Produktif</td>
        <td>:</td>
        <td>$produktif3</td>
    </tr>
    <tr>
        <td>Rata Rata</td>
        <td>:</td>
        <td>$rata</td>
    </tr>
   </table>";if ($rata > 75) {
    echo "<br>";
    echo "Status :TUNTAS!!";
} else {
    echo " Status : BELUM TUNTAS!!";
}

echo "<center>";
echo "<br>";
}


?>












