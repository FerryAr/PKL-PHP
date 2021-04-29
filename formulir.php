<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <title>Formulir</title>
        <style>
            .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $sekolah = $_POST['sekolah'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        echo "<h3 class='text-center'>Data Siswa</h3>";
        echo "<hr class='my-3'/>";
        echo "<ul class='list-group list-group-flush'>";
        echo    "<li class='list-group-item'>Nama : ".$nama."</li>";
        echo    "<li class='list-group-item'>Kelas : ".$kelas."</li>";
        echo    "<li class='list-group-item'>Asal Sekolah : ".$sekolah."</li>";
        echo    "<li class='list-group-item'>Umur : ".$umur."</li>";
        echo    "<li class='list-group-item'>Jenis Kelamin : ".$jk."</li>";
        echo    "<li class='list-group-item'>Alamat : ".$alamat."</li>";
        echo "</ul>";
    } else {
?>
                    <h3 class="text-center">Form Data Siswa</h3>
                    <hr class="my-3"/>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required/>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" required/>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" name="sekolah" id="sekolah" required/>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" name="umur" id="umur" required/>
                        </div>
                        <br/>
                        <span>Jenis Kelamin</span><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jk" value="Laki - Laki" id="jk1" required="required"/>
                            <label for="jk1" class="form-check-label">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan" id="jk2"/>
                            <label for="jk2" class="form-check-label">Perempuan</label>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                        </div>
                        <br/>
                        <div class="form-group wrapper">
                            <input type="submit" class="btn btn-primary" name="submit" id="submit"/>
                        </div>
                    </form>
                </div>
            </div>
<?php
    }
?>
        </div>
    </body>
</html>

