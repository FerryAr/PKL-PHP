<?php
$conn = new mysqli("HOST-MYSQL", "USERNAME-MYSQL", "PASS-MYSQL", "NAMA-DATABASE");

if (mysqli_connect_error()) {
    die("Koneksi ke database error. " .mysqli_connect_error());
}
?>
