<?php
if (isset($_POST['submit'])) {
    $nama    = $_POST['name'];
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $nilai_harian_mtk= $_POST['nilai_harian_mtk'];
    $nilai_tugas_mtk = $_POST['nilai_tugas_mtk'];
    $nilai_uts_mtk   = $_POST['nilai_uts_mtk'];
    $nilai_uas_mtk   = $_POST['nilai_uas_mtk'];

    $nilai_harian_indo= $_POST['nilai_harian_indo'];
    $nilai_tugas_indo = $_POST['nilai_tugas_indo'];
    $nilai_uts_indo   = $_POST['nilai_uts_indo'];
    $nilai_uas_indo   = $_POST['nilai_uas_indo'];

    $nilai_harian_inggris= $_POST['nilai_harian_inggris'];
    $nilai_tugas_inggris = $_POST['nilai_tugas_inggris'];
    $nilai_uts_inggris   = $_POST['nilai_uts_inggris'];
    $nilai_uas_inggris   = $_POST['nilai_uas_inggris'];

    $nilai_harian_produktif= $_POST['nilai_harian_produktif'];
    $nilai_tugas_produktif = $_POST['nilai_tugas_produktif'];
    $nilai_uts_produktif   = $_POST['nilai_uts_produktif'];
    $nilai_uas_produktif   = $_POST['nilai_uas_produktif'];

    class rata {
        public $rata_rata;
        public $grade;

        public function rata_rata4($harian2, $tugas2, $uts2, $uas2){
            $this->rata_rata = ($harian2 + $tugas2 + $uts2 + $uas2) / 4;
            $this->grade = ($this->rata_rata >= 75) ? "LULUS" : "TIDAK LULUS";
        }
    }

    $mtk = new rata();
    $mtk->rata_rata4($nilai_harian_mtk, $nilai_tugas_mtk, $nilai_uts_mtk, $nilai_uas_mtk);

    $indo = new rata();
    $indo->rata_rata4($nilai_harian_indo, $nilai_tugas_indo, $nilai_uts_indo, $nilai_uas_indo);

    $ig = new rata();
    $ig->rata_rata4($nilai_harian_inggris, $nilai_tugas_inggris, $nilai_uts_inggris, $nilai_uas_inggris);

    $pk = new rata();
    $pk->rata_rata4($nilai_harian_produktif, $nilai_tugas_produktif, $nilai_uts_produktif, $nilai_uas_produktif);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <center>
    <tr>
                <td><br></br></td>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama?> <br></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $kelas ?><br></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $jurusan ?></td>
            </tr>
</center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mapel</th>
                    <th>Harian</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Rata-Rata</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matematika</td>
                    <td><?php echo $nilai_harian_mtk; ?></td>
                    <td><?php echo $nilai_tugas_mtk; ?></td>
                    <td><?php echo $nilai_uts_mtk; ?></td>
                    <td><?php echo $nilai_uas_mtk; ?></td>
                    <td><?php echo $mtk->rata_rata; ?></td>
                    <td><?php echo $mtk->grade; ?></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td><?php echo $nilai_harian_indo; ?></td>
                    <td><?php echo $nilai_tugas_indo; ?></td>
                    <td><?php echo $nilai_uts_indo; ?></td>
                    <td><?php echo $nilai_uas_indo; ?></td>
                    <td><?php echo $indo->rata_rata; ?></td>
                    <td><?php echo $indo->grade; ?></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td><?php echo $nilai_harian_inggris; ?></td>
                    <td><?php echo $nilai_tugas_inggris; ?></td>
                    <td><?php echo $nilai_uts_inggris; ?></td>
                    <td><?php echo $nilai_uas_inggris; ?></td>
                    <td><?php echo $ig->rata_rata; ?></td>
                    <td><?php echo $ig->grade; ?></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td><?php echo $nilai_harian_produktif; ?></td>
                    <td><?php echo $nilai_tugas_produktif; ?></td>
                    <td><?php echo $nilai_uts_produktif; ?></td>
                    <td><?php echo $nilai_uas_produktif; ?></td>
                    <td><?php echo $pk->rata_rata; ?></td>
                    <td><?php echo $pk->grade; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
