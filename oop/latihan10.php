<?php

class uang{


    public $gaji;
    public $tunjangan;
    public $potongan;
    public $gaji_bersih;


   public function gaji_pokok($nama,$jabatan){
        if ($jabatan = "direktur") {
            $this->gaji = 10000000;
            echo "Nama Kariyawan : $nama <br>";
            echo "Jabatan : $jabatan <br>";
            echo "Gaji Pokok : $this->gaji<br>";
        }elseif ($jabatan = "manager") {
            $this->gaji = 7.500000;
            echo "Nama Kariyawan : $nama <br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji Pokok : $this->gaji<br>";
        }elseif ($jabatan = "karyawan") {
            $this->gaji = 5.00000;
            echo "Nama Kariyawan : $nama <br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji Pokok : $this->gaji<br>";
        }elseif ($jabatan ="OB") {
            $this->gaji= 2.500000;
            echo "Nama Kariyawan : $nama<br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji Pokok : $this->gaji<br>";
        }else {
            echo "jabatan tidak tersedia<br>";
        }
         }

    public function tunjangan($pendidikan){
          if ($pendidikan = "s1") {
               $this->tunjangan = 1000000;
               echo "Pendididikan : $pendidikan<br>";
               echo "Tunjangan Pendidikan : $this->tunjangan<br>";
          }elseif ($pendidikan = "smk") {
               $this->tunjangan = 750.000;
               echo "Pendididikan : $pendidikan<br>";
               echo "Tunjangan Pendidikan : $this->tunjangan<br>";
          }elseif ($pendidikan = "smp") {
               $this-> tunjangan = 500.000;
               echo "Pendididikan : $pendidikan<br>";
               echo "Tunjangan Pendidikan : $this->tunjangan<br>";
          }elseif ($pendidikan = "sd") {
                $this->tunjangan = 250.000;
                echo "Pendididikan : $pendidikan<br>";
                echo "Tunjangan Pendidikan : $this->tunjangan<br>";
          }else {
             echo "pendidikan tidak tersedia<br>";
          }
        }
          public function potongan($tabungan,$pinjaman){
                 echo "Tabungan : $tabungan<br>";
                 echo "Pinjaman : $pinjaman<br>";
                 $this->potongan = $tabungan + $pinjaman;
                 echo "Total Potongan : $this->potongan<br>";
          }

          public function gaji_bersih(){
                 $this->gaji_bersih = $this->gaji + $this->tunjangan - $this->potongan;
                 echo "Total Gaji Bersih : $this->gaji_bersih<br>";
          }
         }



         $cetak = new  uang();
          echo "<h3> Gaji Pokok </h3>";
         echo $cetak->gaji_pokok("ian","direktur");

         echo "<hr>";
         echo "<h3> Tunjangan Pendidikan  </h3>";
 
         echo $cetak->tunjangan("smk");

         echo "<hr>";
         echo "<h3> Potongan </h3>";

         echo $cetak->potongan(3000000,900000);

         echo "<hr>";
         echo "<h3> Gaji Bersih </h3>";

         echo $cetak->gaji_bersih();
?>