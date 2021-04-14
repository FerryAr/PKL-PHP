<?php
if(isset($_POST['submit'])) {
    include "../app/koneksi2.php";
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $check = $conn->query("SELECT * FROM user WHERE username='$username'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Username yang anda masukkan sudah terdaftar, silahkan login...'); window.location.href='../login.php'</script>";
    } else {
    $q = $conn->query("INSERT INTO user VALUES (null, '$username', '$password')");
    if ($q) {
        echo "<script>alert('Registrasi Berhasil, menuju ke halaman login...'); window.location.href='../login.php'</script>";
    } else {
        echo "<script>alert('Registrasi gagal dengan log : '.$conn->error); window.location.href='../register.php'</script>";
    }
    }    
} else {
    header("Location:../register.php");
}
?>
