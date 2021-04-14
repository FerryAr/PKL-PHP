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
                            <h3 class="text-center">Tambah Data</h3>
                            <br/>

                            <form method="POST" action="../routes/prosestambah.php">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama"/>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat"/>
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input type="number" class="form-control" name="usia"/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
} else {
    echo "<script>alert('Anda belum login!'); window.location.href='../login.php.php'</script>";
}
?>
