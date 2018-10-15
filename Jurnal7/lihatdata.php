<?php
 require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lihat Data</title>
</head>
<body>
    <table border=1>
        <tr>
            <td><form action="lihatdata.php" method="get">
                <input type="hidden" name="cari">
                <input type="text" name="datamahasiswa">
                <input type="submit" value="search">
            </form>
            </td>
        </tr>
        <?php
            if (isset($_GET['cari']) && $_GET['cari']=='search' && isset($_GET['datamahasiswa'])) {
                $datamahasiswa = $_GET['datamahasiswa'];
                $query = "SELECT `nim`, `nama` FROM `mahasiswa` WHERE `nim` LIKE %datamahasiswa% OR `nama` LIKE %datamahasiswa";
            }else {
                $query="SELECT * FROM `mahaiswa`";
            }
        ?>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
        <?php
            $sql = "SELECT * FROM mahasiswa";
            $result = mysqli_query($conn, $sql);
            while ($data=mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><a href="hapus.php?nim=<?php echo $data['nim']; ?>">Hapus Data</a></td>
            </tr>
            <?php
            }            
        ?>
    </table>
</body>
</html>
