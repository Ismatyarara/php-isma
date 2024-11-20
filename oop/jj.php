<?php 
if (isset($_POST['submit'])) {

    $jurusan       = $_POST['jurusan'];
    $nama_lengkap  = $_POST['name'];
    $jk            = $_POST['gender'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp         = $_POST['hp'];
    $email         = $_POST['email'];
    $provinsi      = $_POST['pro'];
    $kab_kota      = $_POST['Kota']; // sesuai dengan name di form
    $kecamatan     = $_POST['Kecamatan']; // sesuai dengan name di form
    $desa          = $_POST['Desa_Kelurahan']; // sesuai dengan name di form
    $alamat_lengkap= $_POST['alamat_al'];
    $kode          = $_POST['pos'];
    $asal_sekolah  = $_POST['name_asal_sekolah'];
    $alamat_sekolas= $_POST['alamat_sekolah'];
    $nama_ortu     = $_POST['ortu'];
    $pekerjaan     = $_POST['pekerjaan'];
    $telepon_ortu  = $_POST['telpon'];
    $alamat_lengkapp = $_POST['alamat_lk'];
}

class ppdb {
    public function data_diri($jurusan2, $nm2, $jk2, $no2, $email2) {
        echo "<b>DATA DIRI (BIODATA)</b><br><br>";
        echo "Jurusan : $jurusan2<br>";
        echo "Nama Lengkap : $nm2 <br>";
        echo "Jenis Kelamin : $jk2 <br>";
        echo "Nomer HP : $no2 <br>";
        echo "Email : $email2 <br>";
    }

    public function alamat_siswa($prov2, $kab2, $keca2, $desa2, $alamat3, $kode3) {
        echo "<b>ALAMAT CALON SISWA</b><br><br>";
        echo "Provinsi : $prov2<br>";
        echo "Kabupaten : $kab2 <br>";
        echo "Kecamatan : $keca2 <br>";
        echo "Desa : $desa2 <br>";
        echo "Alamat: $alamat3 <br>";
        echo "Kode pos : $kode3<br>";
    }

    public function data_asal($asal_sekolah4, $alamat_sekolas3) {
        echo "<b>DATA ASAL </b><br><br>";
        echo "Asal sekolah : $asal_sekolah4 <br>";
        echo "Alamat sekolah : $alamat_sekolas3 <br>";
    }
    public function data_ortu($ortu3,$pekerja4,$tel3,$almat4){
          echo "<b>DATA ORANG TUA</b> <br><br>";
          echo "Nama Ortu : $ortu3 <br>";
          echo "Pekerjaan ortu : $pekerja4 <br>";
          echo "Alamat lengkap : $almat4 <br>";
    }
}

$cetak = new ppdb();

echo "<center><h2><b>PENDAFTARAN</b></h2></center><br></br>";
$cetak->data_diri($jurusan, $nama_lengkap, $jk, $no_hp, $email);
echo "<br><hr>";
$cetak->alamat_siswa($provinsi, $kab_kota, $kecamatan, $desa, $alamat_lengkap, $kode);
echo "<br><hr>";
$cetak->data_asal($asal_sekolah, $alamat_sekolas);
echo "<br><hr>";
$cetak->data_ortu($nama_ortu, $pekerjaan, $telepon_ortu, $alamat_lengkapp);

?>
