<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <center>
        <img src="yayasan.jpg" alt="">
        <h2><b>PENGGAJIHAN</b></h2>
        <h2><b>GURU/KARYAWAN YAYASAN ASSALAAM</b></h2>

        <form action="proseslatihan5.php" method="post">
            <table>
                <tr>
                    <td><b>Data Penggajihan</b><br></br></td>
                </tr>
                <tr>
                    <td>No</td>
                </tr>
                <tr>   
                    <td><input type="number" name="no"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                </tr>
                <tr>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    </tr>
                    <tr>
                    <td><select name ="unit_pendidikan" id="unit pendidikan" name="unit pendidikan">
                    <option value="pilih unit">Pilih Unit</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                         </select></td>
                </tr>
                <tr>
                    <td>Tanggal Gajihan</td>
                </tr>
                <tr>
                    <td><input type="date" name="tanggal_gajian"></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><b>Gaji</b><br></br></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                </tr>
                <tr>
                    <td><select name ="jabatan" id="jabatan" name="jabatan">
                    <option value="pilih jabatan">Pilih Jabatan</option>
                    <option value="kepala sekolah">Kepala Sekolah</option>
                    <option value="wakasek">Wakasek</option>
                    <option value="guru">Guru</option>
                    <option value="ob">OB</option>
                         </select></td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                </tr>
                    <td><input type="number" name="lama_kerja"></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                </tr>
                </tr>
                    <td><select name="status" id="status">
                        <option value="status">Status Kerja</option>
                        <option value="tetap">Tetap</option>
                        <option value="kontrak">Kontrak</option>
                    </select></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><b>Potongan</b><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>BPJS</td>
                </tr>
                <tr>
                    <td><input type="number" name="bpjs"></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                </tr>
                <tr>
                    <td><input type="number" name="pinjaman"></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                </tr>
                <tr>
                    <td><input type="number" name="tabungan"></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                </tr>
                <tr>
                    <td><input type="number" name="lain"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="proses" value="simpan"></td>
                </tr>














            </table>
        </form>
     </center>
</body>
</html>