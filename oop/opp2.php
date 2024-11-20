<?php
  

  class ppdb{

       public function data_diri($jurusan,$nama,$jenis_kelamin,$tempat_lahir,
       $tanggal_lahir,$nomer,$email){
        
        echo "<b>DATA DIRI CALON PESERTA </b><br><br>";
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jenis_kelamin <br>";
        echo "Tempat Lahir : $tempat_lahir <br>";
        echo "Tanggal Lahir : $tanggal_lahir <br>";
        echo "Nomer HP : $nomer <br>";
        echo "Email : $email <br>";
       }

       public function alamat_calon($provinsi,$kab_kota,$kecamatan,$desa_lurah,
       $alamat,$kode_pos){
          
        echo "<b>ALAMAT CALON PENDAFTAR </b><br></br>";
        echo " Provinsi : $provinsi <br>";
        echo " Kab / Kota : $kab_kota <br>";
        echo " Kecamatan : $kecamatan <br>";
        echo " Desa / Kelurahan: $desa_lurah <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kode_pos <br>";
       }

       public function asal_sekolah($nama_asal_sekolah,$alamat_sekolah){

        echo "<b>DATA ASAL SEKOLAH PESERTA</b><br></br>";
        echo "Nama Asal Sekolah : $nama_asal_sekolah <br>";
        echo "Alamat Sekolah : $alamat_sekolah <br>";

       }

       public function data_ortu($nama_wali,$pekerjaan_wali,
       $nomer_aktif,$alamat_lengkap){
         
        echo "<b>DATA ORANG TUA</b><br></br>";
        echo "Nama Wali / Ibu / Ayah : $nama_wali <br>";
        echo "Pekerjaan Wali / Ibu / Ayah : $pekerjaan_wali <br>";
        echo "Nomer Yang Bisa Di Hubungi : $nomer_aktif <br>";
        echo "Alamat Lengkap : $alamat_lengkap <br>";
      }
  }

  $cetak = new ppdb();

  echo $cetak->data_diri("RPL","isma tiara","perempuan","bandung","09-08-2007",
  "09988766266262","sukiyo.@gmail.com");

  echo "<hr>";

  echo $cetak->alamat_calon("jawa barat","gatau","kabupaten bandung","dayehkolot","jln.kenangan","0098");

  echo "<hr>";

  echo $cetak->asal_sekolah("mts nurul iman","cibaduyut");

  echo "<hr>";
  echo $cetak->data_ortu("bapak","ytta","098766252525","jln.kenangan mawar");
?>