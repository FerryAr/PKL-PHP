<?php
session_start();
if(isset($_SESSION['username']) == 'admin') {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Edit Data</h3>
                            <br/>
<?php
require_once '../app/koneksi2.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $conn->query("SELECT * FROM biodata WHERE id = '$id'");

    foreach($q as $dt) :
?>
                            <form method="POST" action="prosesupdate.php">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $dt['id']; ?>"
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $dt['nama']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $dt['alamat']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input type="number" class="form-control" name="usia" value="<?php echo $dt['usia']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit"/>
                                </div>
                            </form>
<?php
        endforeach;
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
} else {
    echo "<script>alert('Anda belum login'); window.location.href='../login.php'</script>";
}
?>
