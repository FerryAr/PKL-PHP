<?php
session_start();
if(isset($_POST['submit'])) {
    include "../app/koneksi2.php";
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $q = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");;
    if($q->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Berhasil Login!'); window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('Username/Password salah!'); window.location.href='../login.php'</script>";
    }
} else {
    header("Location: ../login.php");
}
?>
