<?php
    require_once("db.php");

    $nim = $_GET['nim'];

    $sql = "DELETE FROM mahasiswa WHERE nim=$nim";

    if (mysqli_query($conn, $sql)) {
        header("location: lihatdata.php");
    }else {
        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>