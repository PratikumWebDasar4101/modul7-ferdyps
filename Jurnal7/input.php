<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <form action="insertdata.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" pattern="\d*" maxlength="10"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="Pria">Pria</td>
            <td><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>
                <select name="prodi">
                    <option value="D3SI">D3 Sistem Informasi</option>
                    <option value="D3SIA">D3 Sistem Informasi Akuntansi</option>
                    <option value="D3RKPLA">D3 RKPLA</option>
                    <option value="D3SM">D4 Sistem Multimedia</option>
                    <option value="D3TK">D3 Teknologi komputer</option>
                    <option value="D3PH">D3 Perhotelan</option>
                    <option value="D3MP">D3 Manajemen pemasaran</option>
                    <option value="D3TT">D3 Teknik Telekomunikasi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>
                <select name="fakultas">
                    <option value="FIT">FIT</option>
                    <option value="FEB">FEB</option>
                    <option value="FIK">FIK</option>
                    <option value="FTE">FTE</option>
                    <option value="FIF">FIF</option>
                    <option value="FRI">FRI</option>
                    <option value="FKB">FKB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Asal</td>
            <td><input type="text" name="asal"></td>
        </tr>
        <tr>
            <td>Moto Hidup</td>
            <td><textarea name="moto" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
        </table>
    </form>
</body>
</html>
