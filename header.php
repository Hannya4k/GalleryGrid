<?php
session_start();
include 'db_conn.php';
echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light p-3 mb-2 bg-dark-subtle text-emphasis-dark sticky-top">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo'
        <div class="container-xxl">
        <a href="index.php" class="navbar-brand">
            <span class="fw-bold text-body">GalleryGrid</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Home</a>
                </li>
                <!--search bar-->
                <li class="nav-item" data-bs-toggle="modal" data-bs-target="#UDModal">
                    <div class=" col-xs-3">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                            <button class="btn btn-secondary" type="submit" data-bs-toggle="modal"
                                data-bs-target="#UDModal">Search</button>
                        </form>
                    </div>
                </li>
                <!--UPLOAD-->
                <li class="nav-item ms-2 d-none d-md-inline">
                    <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#UploadstaticBackdrop">Upload</a>
                </li>

            <p class = "user">Welcome! '.$_SESSION['User_name'].'</p>

            <div class="nav-item ms-2 d-md-inline dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Account
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout.php">Log out</a>
                        </li>
                    </ul>
                </div>
                ';
    }else{
        echo' <div class="container-xxl">
        <a href="index.php" class="navbar-brand">
            <span class="fw-bold text-body">GalleryGrid</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contacts">Contacts</a>
                </li>
                <li class="nav-item ms-2 d-md-inline">
                    <a class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin"
                        aria-controls="offcanvasRight">Log In</a>
</li>
</div>';
    }
        
echo'
    </nav>
</body>

</html>';
?>