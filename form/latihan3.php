<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <center>
    <img src="images.jpg" alt="" width="100">
</head>
<body>
    <form action="" method="POST">
      <h2>Biodata Diri</h2>
      <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value=""></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value=""></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" value=""></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki"require>laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan" require>perempuan</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id=""></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name ="agama" id="agama" name="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
        </select></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><select name ="pendidikan" id="pendidikan" name="pendidikan">
            <option value="tk">TK</option>
            <option value="sd">SD</option>
            <option value="mts">MTS</option>
            <option value="smk">SMK</option>
        </select></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><select name ="status" id="status" name="status">
            <option value="belum menikah">Belum Menikah</option>
            <option value="sudah menikah">Sudah Menikah</option>
        </select></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="radio" name="hobi" value="membaca"require>Membaca
            <input type="radio" name="hobi" value="memasak" require>memasak
            <input type="radio" name="hobi" value="game" require>Game
        </td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            <td>:</td>
            <td><select name ="cita-cita" id="cita-cita" name="cita">
            <option value="ceo">CEO</option>
            <option value="dokter">Dokter</option>
            <option value="koki">Koki</option>
            <option value="guru">Guru</option>
        </select></td>
        </tr>
        <tr>
            <td>Kata Kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata_kata_bijak" id=""></textarea></td>
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
    
$nama_lengkap2 = $_POST['nama_lengkap'];
$tempat_lahir2 = $_POST['tempat_lahir'];
$tanggal_lahir2 = $_POST['tanggal_lahir'];
$jenis_kelamin2 = $_POST['jenis_kelamin'];
$alamat2 = $_POST['alamat'];
$agama2 = $_POST['agama'];
$pendidikan2 = $_POST['pendidikan'];
$status2 = $_POST['status'];
$hobi2 = $_POST['hobi'];
$cita_cita2 = $_POST['cita-cita'];
$kata_kata_bijak = $_POST['kata_kata_bijak'];

echo "<center>";
echo "<br>";
echo "BIODATA SISWA <br>";
echo "<br>";
echo "Nama Lengkap : $nama_lengkap2 <br>";
echo "Tempat Lahir: $tempat_lahir2 <br>";
echo " Tanggal Lahir: $tanggal_lahir2 <br>";
echo "Jenis Kelamin : $jenis_kelamin2 <br>";
echo "Alamat : $alamat2 <br>";
echo "Agama : $agama2 <br>";
echo "Pendidikan Terakhir: $pendidikan2 <br>";
echo "Status : $status2 <br>";
echo "Hobi : $hobi2 <br>";
echo "Cita-Cita : $cita_cita2 <br>";
echo "Kata-Kata Bijak : $kata_kata_bijak";
echo "<center>";
}
?>