<?php
session_start();
if(isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>Biodata</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <div class="card my-5">
                <div class="card-body">
                    <h1>Selamat Datang : <?php echo $_SESSION['username']; ?></h1>
                    <a href="../index.php" class="btn btn-primary btn-sm">Home</a>
                    <a href="../routes/logout.php" class="btn btn-danger btn-sm">Logout</a>
                    <h3 class="mt-3">Biodata</h3>
<?php
if($_SESSION['username'] == 'admin') {
                    echo "<a href='tambah.php'>+ Tambah Data</a>";
} else {
    echo "<hr class='mb-3'/>";
}
?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Usia</th>
<?php
    if($_SESSION['username'] == 'admin') {
        echo "<th>Aksi</th>";
    }
?>
                        </tr>
                        <?php
                        include("../app/koneksi2.php");
                        $no = 1;
                        $data = $conn->query("SELECT * FROM biodata");
                        while ($d = $data->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['usia']; ?></td>
<?php
                            $id = $d['id'];
                            if($_SESSION['username'] == 'admin') {
                            echo "<td>";
                            echo "<a href='edit.php?id=$id' class='btn btn-warning btn-sm'>Edit</a>";
                            echo " | ";
                                echo "<a href='hapus.php?id=$id' class='btn btn-danger btn-sm'>Hapus</a>";
                            echo "</td>";
                        echo "</tr>";
                            }
                        }
                        ?>
                    </table>
<?php
                        $jumlah = $data->num_rows;
?>
                <p><?php echo "Jumlah Data : " . $jumlah ?></p>
                </div>
            </div>
        </div>
    </body>
<?php
} else {
    echo "<script>alert('Anda belum login! Login sek'); window.location.href='../login.php'</script>";
}
?>
</html>
                        
