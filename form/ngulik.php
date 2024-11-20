<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Sate Monyet</h2>

        <form action="ngulik2.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td>Menu</td>
                <td>:</td>
                <td><select name="menu" id="menu">
                    <option value="sate ayam">sate ayam</option>
                    <option value="sate kambing">sate kambing</option>
                    <option value="sate sapi">sate sapi</option>
                    <option value="sate ikan">sate ikan</option>
                    <option value="sate domba">sate domba</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="simpan"></td>
            </tr>
        </table>
</form>
    </center>
</body>
</html>