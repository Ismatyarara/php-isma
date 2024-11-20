<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran PPDB SMK Assalaam Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Formulir Pendaftaran PPDB SMK Assalaam Bandung</h2>
        <p><b>Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi)</b></p>
        <form action="jj.php" method="POST">
        <div class="mb-3">
                <label for="major" class="form-label">Jurusan yang Dipilih</label>
                <select class="form-select" id="major" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Kendaraan Ringan Otomoitif">Teknik Kendaraan Ringan Otomoitif</option>
                    <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <br>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                
                </select>
                <br>
            <div class="mb-3">
                <label for="birthplace" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="birthplace" name="tempat_lahir" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">Nomer HP</label>
                <input type="text" class="form-control" id="hp" name="hp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <p><b>Alamat Calon Pendaftar</b></p>
            </div>
            <div class="mb-3">
                <label for="pro" class="form-label">Provinsi</label>
                <select class="form-select" id="pro" name="pro" required>
                    <option value="">Pilih Provinsi</option>
                    <option value="jawa barat">jawa barat</option>
                    <option value="aceh">aceh</option>
                    <option value="gorontalo">Gorontalo</option>
                    <option value="jambi">Jambi</option>
                    <option value="aceh">aceh</option>
                    <option value="kalimantan">Kalimantan</option>
                    <option value="sulawesi">Sulawesi</option>
                    <option value="sumatra">Sumatra</option>
                    <option value="bengkulu">Bengkulu</option>
                    <option value="maluku">Maluku</option>
                </select>
                <br>
                <div class="mb-3">
                <label for="Kota" class="form-label">Kab / Kota</label>
                <select class="form-select" id="Kota" name="Kota" required>
                    <option value="">Pilih Kab / Kota</option>
                    <option value="kabupaten malaka">malaka</option>
                    <option value="bandung">bandung</option>
                    <option value="jogjakarta">Jogjakarta</option>
                    <option value="yogyakarta">Yogyakarta</option>
                    <option value="kabupaten bojonegoro">Kabupaten Bojonegoro</option>
                    <option value="blitar">Blitar</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="serang">Serang</option>
                    <option value="kota palu">Kota Palu</option>
                    <option value="medan">Medan</option>
                </select>
                <br>
                <div class="mb-3">
                <label for="Kecamatan" class="form-label">Kecamatan</label>
                <select class="form-select" id="Kecamatan" name="Kecamatan" required>
                    <option value="">Pilih Kecamatan</option>
                    <option value="cibadak">cibadak</option>
                    <option value="karasak">karasak</option>
                    <option value="sawangan">Sawangan</option>
                    <option value="Selokromo">Selokromo</option>
                    <option value=" Sei Kera Hulu "> Sei Kera Hulu </option>
                    <option value="Pandau Hilir">Pandau Hilir</option>
                    <option value="Jagakarsa">Jagakarsa</option>
                    <option value="pancoran">Pancoran</option>
                    <option value="Kelapa Dua Wetan">Kelapa Dua Wetan</option>
                    <option value=" Cakung"> Cakung</option>
                </select>
                <br>
                <div class="mb-3">
                <label for="Desa Kelurahan" class="form-label">Desa / Kelurahan</label>
                <select class="form-select" id="Desa_Kelurahan" name="Desa_Kelurahan" required>
                    <option value="">Pilih Desa / Kelurahan</option>
                    <option value="sei_kera_hulu">Sei Kera Hulu</option>
                    <option value="pandau_hilir">Pandau Hilir</option>
                    <option value="jagakarsa">Jagakarsa</option>
                    <option value="pancoran">Pancoran</option>
                    <option value="kelapa_dua_wetan">Kelapa Dua Wetan</option>
                    <option value="cibadak">Cibadak</option>
                    <option value="karasak">Karasak</option>
                    <option value="sawangan">Sawangan</option>
                    <option value="selokromo">Selokromo</option>
                    <option value="cisarua">Cisarua</option>
                </select>
                <br>
            <div class="mb-3">
                <label for="alamat_al" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat_al" name="alamat_al" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="pos" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="pos" name="pos" required>
            </div>
            <p><b>Data Asal Sekolah</b></p>
            </div>
            <div class="mb-3">
                <label for="name_asal_sekolah" class="form-label">Nama Asal Sekolah</label>
                <input type="text" class="form-control" id="name_asal_sekolah" name="name_asal_sekolah" required>
            </div>
            <div class="mb-3">
                <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
                <textarea class="form-control" id="alamat_sekolah" name="alamat_sekolah" rows="3" required></textarea>
            </div>
            <p><b>Data Orang Tua</b></p>
            <div class="mb-3">
                <label for="ortu" class="form-label">Nama Orang Tua/Wali</label>
                <input type="text" class="form-control" id="ortu" name="ortu" required>
            </div>
            <div class="mb-3">
                <label for="Pekerjaan" class="form-label">Pekerjaan Ayah / Ibu / Wali *</label>
                <input type="text" class="form-control" id="Pekerjaan" name="pekerjaan" required>
            </div>

            <div class="mb-3">
                <label for="telpon" class="form-label">No. Telepon Orang Tua/Wali</label>
                <input type="text" class="form-control" id="telpon" name="telpon" required>
            </div>
            <div class="mb-3">
                <label for="alamat_lk" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat_lk" name="alamat_lk" rows="3" required></textarea>
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Daftar Sekarang</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
