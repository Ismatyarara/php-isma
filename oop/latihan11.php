<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Rapot Siswa</h1>
        <form action="h.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                   <td>Jurusan</td>
                   <td>:</td>
                   <td><select name ="jurusan" id="jurusan" name="jurusan">
                   <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                   <option value="Teknik Kendaraan Ringan Otomoitif">Teknik Kendaraan Ringan Otomoitif</option>
                   <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                   </select></td>
                </tr> 
                
                <tr>
                    <td></td>
                    <td></td>
                    <td><h3>Nilai Matematika</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_harian_mtk"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_tugas_mtk"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uts_mtk"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uas_mtk"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><h3>Nilai Indonesia</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_harian_indo"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_tugas_indo"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uts_indo"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uas_indo"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><h3>Nilai Inggris</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_harian_inggris"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_tugas_inggris"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uts_inggris"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uas_inggris"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><h3>Nilai Produktif</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_harian_produktif"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_tugas_produktif"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uts_produktif"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name ="nilai_uas_produktif"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>