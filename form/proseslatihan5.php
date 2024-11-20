<?php

if (isset($_POST['proses'])) {
$no3 = $_POST ['no'];
$nama3 =$_POST['nama'];
$unit_pendidikan3 =$_POST['unit_pendidikan'];
$tanggal_gaji3 = $_POST['tanggal_gajian'];
$jabatan3 = $_POST['jabatan'];
$lama_kerja3 =$_POST['lama_kerja'];
$status =$_POST['status'];
$bpjs3 =$_POST['bpjs'];
$pinjaman3 =$_POST['pinjaman'];
$tabungan3 =$_POST['tabungan'];
$lain3 =$_POST['lain'];
$total_potongan = $bpjs3+$pinjaman3+$tabungan3+$lain3;



if($jabatan3 == "kepala sekolah"){
        $gaji=1000000;
} elseif($jabatan3 == "wakasek"){
        $gaji = 750000;
}elseif ($jabatan3 == "guru") {
        $gaji = 500000;
}elseif ($jabatan3 == "ob") {
        $gaji = 2500000;
}else {
    $gaji=0;
}

if ($lama_kerja3 >= 5) {
    $tunjangan = 1000000;
}else {
    $tunjangan = 0;
}

if ($status == "tetap") {
    $bonus = 500000;
}elseif ($tatus == "kontrak") {
    $bonus = 0;
}else {
    $bonus =0;
}

$gaji_kotor = $gaji + $tunjangan + $bonus;
$gaji_bersih = $gaji_kotor - $total_potongan;



echo "<center>";
echo "STRUK <br>";
echo "=============================================";
echo "<table>
   <tr>
   <td><b>Primary card title</b></td>
   </tr>
   <tr>
   <td><br></td>
   </tr>
    <tr>
        <td>No </td>
        <td>:</td>
        <td>$no3</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nama3</td>
    </tr>
    <tr>
        <td>Unit Pendidikan</td>
        <td>:</td>
        <td>$unit_pendidikan3</td>
    </tr>
    <tr>
        <td>Tanggal Gajian</td>
        <td>:</td>
        <td>$tanggal_gaji3</td>
    </tr>
    <tr>
    <td><br></td>
    <tr>
    <td><b>Gajian</b></td>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>$jabatan3</td>
    </tr>
    <tr>
   <td>Gaji</td>
   <td>:</td>
   <td>$gaji</td>
   </tr>
    <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td>$lama_kerja3</td>
    </tr>
    <tr>
        <td>Tunjangan Lama Kerja</td>
        <td>:</td>
        <td>$tunjangan</td>
    </tr>
        <tr>
        <td>Status Kerja </td>
        <td>:</td>
        <td>$status</td>
    </tr>
    <tr>
        <td>Bonus</td>
        <td>:</td>
        <td>$bonus</td>
    </tr>
    <tr>
        <td><b><u><i>Gaji Kotor</i></u></b></td>
        <td>:</td>
        <td>$gaji_kotor</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><b>Potongan</b></td>
    </tr>
    <tr>
        <td>BPJS</td>
        <td>:</td>
        <td>$bpjs3</td>
    </tr>
    <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td>$pinjaman3</td>
    </tr>
    <tr>
        <td>Tabungan</td>
        <td>:</td>
        <td>$tabungan3</td>
    </tr>
    <tr>
        <td>Lainnya</td>
        <td>:</td>
        <td>$lain3</td>
    </tr>
    <tr>
        <td><b>Total Potongan</b></td>
        <td>:</td>
        <td>$total_potongan</td>
    </tr>
        <tr>
        <td><b><i><u>Gaji Bersih</u></i></b></td>
        <td>:</td>
        <td>$gaji_bersih</td>
    </tr>
    
";
echo "<center>";
}
?>