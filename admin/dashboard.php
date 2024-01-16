<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    header("location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PERPUSTAKAAN SMKN 1 SUBANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background : #eee;
            font-family : 'Roboto',sans-serif;
        }
        #side_nav{
            background : #222;
            max-width : 305px;
            min-width : 305px;
        }
        .content{
            min-height : 100vh;
            width : 100%;
        }
        hr{
           background : #eee; 
        }
        .sidebar li.active{
            background : #eee;
            border-radius : 8px;
        }
        .sidebar li.active a, .sidebar li.active a:hover{
            color : #222;
        }
        .sidebar li a{
            color: #fff;
        }
        .dropdown {
            color : #fff;
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width : 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 8px 10px;
            z-index: 1;
            color : #222;
            border-radius : 5px;
        }

        .dropdown-content a{
            text-decoration : none;
            color : #333;
        }

        .dropdown-content a:hover{
            color : #219ebc;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- As a heading -->
    <!-- sidebar -->
    <div class="main-cointaier d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                
                <h1 class="fs-4"><span class="bg-white text-dark rounded-2 shadow px-2 me-2">PERPUS</span><span class="text-white">SMKN 1 SUBANG</span></h1>
               
                <ul class="list-unstyled px-2">
                    <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                    <li class=""><a href="data/index.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-box-seam me-2"></i></ion-icon>Data Buku</a></li>
                    <li class=""><a href="anggota/index_member.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-people-fill me-2"></i>Data Anggota</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-archive me-2"></i></ion-icon>Data Peminjam</a></li>
                </ul>
                
                <hr class="h-color mx-3">
                <ul class="list-unstyled px-2 d-flex">
                    <div class="d-flex flex-column">
                        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-gear me-2"></i>Setting</a></li>
                        <div class="dropdown ms-3">
                        <i class="bi bi-person-circle me-2"></i>Account
                        <div class="dropdown-content">
                            <a href="../Logout.php">Log out</a>
                        </div>
                        </div>
                        
                    </div>
                </ul>
            </div>

        </div>
        <!-- sidebar end -->
        <!-- content section -->
        <div class="content">
            <!-- navbar start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Perpustakaan<ion-icon name="book-outline" class="ms-2"></ion-icon></a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            </div>
            </div>
            </nav>
            <!-- navbar end -->
            <!-- main section -->
            <div class="container-fluid">
                <div class="d-flex">
                    <div class="d-flex flex-row">
                    <div class="card mt-4 ms-2" style="width: 18rem; height: 12rem;">   
                    <img src="../img/book.png" class="card-img ms-2" alt="buku" style="height : 5rem; width : 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Buku</h5>
                            <a href="data/index.php" class="btn btn-primary">Lihat Data</a>
                        </div>
                    </div>
                    <div class="card mt-4 ms-3" style="width: 18rem; height: 12rem;">   
                    <img src="../img/book.png" class="card-img ms-2" alt="buku" style="height : 5rem; width : 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Anggota</h5>
                            <a href="#" class="btn btn-primary">Lihat Data</a>
                        </div>
                    </div>
                    <div class="card mt-4 ms-3" style="width: 18rem; height: 12rem;">   
                    <img src="../img/book.png" class="card-img ms-2" alt="buku" style="height : 5rem; width : 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Peminjam</h5>
                            <a href="#" class="btn btn-primary">Lihat Data</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- content section end -->
    </div>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(".sidebar ul li").on('click', function(){
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        })
    </script>
</body>
</html>