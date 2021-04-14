<?php
    require_once '../app/koneksi2.php';
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $usia = $_POST['usia'];

        $q = $conn->query("INSERT INTO biodata VALUES (null, '$nama', '$alamat', '$usia')");
        if ($q) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='../admin/index.php'</script>";
        } else {
            echo "$conn->error";
        }
    } else {
        header("Location: ../admin/index.php");
    }
?>
