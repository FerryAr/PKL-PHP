<?php
session_start();
if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Form Login</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Login</h3>
                        <br/>

                        <form method="POST" action="routes/proseslogin.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" style="form-control" name="username"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" style="form-control" name="password"/>
                            </div>
                            <br/>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary btn-sm" name="submit"/>
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
    echo "<script>alert('Anda Sudah login.'); window.location.href='index.php'</script>";
}
?>
