<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Home | PKL PHP</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/angular-route.min.js"></script>
    <style>
        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: var(--bs-light);
            border-radius: .3rem
        }
    </style>
</head>
<body ng-app="spaApp">
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4 text-center">Praktik Kerja Lapangan</br>SMK N 1 Wonosobo</h1>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!about">Tentang Saya</a>
                    </li>
<?php
session_start();
if(isset($_SESSION['username'])) {
    echo "<li class='nav-item'>";
    echo    "<a class='nav-link' href='crud/index.php'>Biodata</a>";
    echo "</li>";
}
?>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ms-auto">
<?php
if(isset($_SESSION['username'])) {
    echo "<li class='nav-link'>";
    echo    "<span class='navbar-text'><b><i>Selamat Datang ".$_SESSION['username']." !</b></i>";
    echo "</li>";
    echo "<li class='nav-item'>";
    echo    "<a class='nav-link' href='routes/logout.php'>Logout</a>";
    echo "</li>";
} else {

                    echo "<li class='nav-item'>";
                    echo    "<a class='nav-link' href='login.php'>Login</a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo    "<a class='nav-link' href='register.php'>Register</a>";
                    echo "</li>";
}
?>
                </ul>
            </div>
        </nav>
        <br/>
        <div ng-view></div>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            let app = angular.module("spaApp", ['ngRoute']);
            app.config(function($routeProvider) {
                $routeProvider
                .when("/", { templateUrl: 'pages/home.php' })
                .when("/about", { templateUrl: 'pages/about.php' })
            });
        </script>
    </body>
</html>


