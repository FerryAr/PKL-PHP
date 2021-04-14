<?php
    require_once '../app/koneksi2.php';
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $usia = $_POST['usia'];

        $q = $conn->query("UPDATE biodata SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id='$id'");
        if ($q) {
            echo "<script>alert('Data berhasil di update!'); window.location.href='../crud/index.php'</script>";
        } else {
            echo "<script>alert('Gagal dengan log '.$conn->error);</script>";
        }
    } else {
        header("Location: ../crud/index.php");
    }
?>
