<?php
    require_once("db.php");
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jk = $_POST['jenis_kelamin'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $asal = $_POST['asal'];
        $moto = $_POST['moto'];

        $sql = "INSERT INTO mahasiswa(nama,nim,jenis_kelamin,prodi,fakultas,asal,moto)VALUES('$nama','$nim','$jk','$prodi','$fakultas','$asal','$moto')";

        if (mysqli_query($conn,$sql)) {
            header("location: lihatdata.php");
        }
    }
?>