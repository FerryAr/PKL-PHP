<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
    echo "<script>alert('Anda telah berhasil logout!'); window.location.href='../index.php'</script>";
} else {
    header("Location: ../index.php");
}
?>
