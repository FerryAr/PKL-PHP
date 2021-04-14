<?php
session_start();
if (isset($_SESSION['username']) == 'admin') {
require_once "../app/koneksi2.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $conn->query("DELETE FROM biodata WHERE id='$id'");
    if($q) {
        echo "<script>alert('Data berhasil di hapus!'); window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Gagal dengan log : ' .$conn->error); window.location.href='index.php'</script>";
    }
} else {
    header("Location: index.php");
}
} else {
    echo "<script>alert('Anda belum login'); window.location.href='../login.php'</script>";
}
?>
