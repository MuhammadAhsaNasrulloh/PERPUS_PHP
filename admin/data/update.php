<?php 
    require_once '../connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = $conn->query("SELECT * FROM buku WHERE Id_buku = '$id'");
        foreach($q as $dt) :
        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        
    </style>
         <!-- sidebar -->
    <div class="main-cointaier d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                
                <h1 class="fs-4"><span class="bg-white text-dark rounded-2 shadow px-2 me-2">PERPUS</span><span class="text-white">SMKN 1 SUBANG</span></h1>
               
                <ul class="list-unstyled px-2">
                    <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                    <li class=""><a href="index.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-box-seam me-2"></i></ion-icon>Data Buku</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-people-fill me-2"></i>Data Anggota</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-archive me-2"></i></ion-icon>Data Peminjam</a></li>
                </ul>
                
                <hr class="h-color mx-3">
                <ul class="list-unstyled px-2 d-flex">
                    <div class="d-flex flex-column">
                        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-gear me-2"></i>Setting</a></li>
                        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person-circle me-2"></i>Account</a></li>
                </div>
                </ul>
            </div>

        </div>
        <!-- sidebar end -->
        <!-- content -->
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
               
                <div class="card container-fluid mt-3 ms-5 d-flex justify-content-center" style="width : 70rem">
                <form action="procces_update.php" method="post" class="ms-3">
                    <input type="hidden" name="Id_buku" value="<?= $dt['Id_buku']?>" required><br>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Penerbit</label><br>
                        <input type="text" name="Nama_buku" value="<?= $dt['Nama_buku']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Penerbit</label><br>
                        <input type="text" name="Nama_penerbit" value="<?= $dt['Nama_penerbit']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Buku</label><br>
                        <input type="number" name="Jumlah_buku" value="<?= $dt['Jumlah_buku']?>" required>
                    </div>
                    <div class="mb-3">
                        <label label for="" class="form-label">Tahun Terbit</label><br>
                        <input type="date" name="Tahun_terbit" value="<?= $dt['Tahun_terbit']?>" required>
                    </div>
                    <input type="submit" name="submit" value="Ubah Data" class="d-flex btn btn-primary"  style="border-radius : 5px; padding : 5px 7px;" required>
                </form>
                <a class="btn btn-primary d-flex align-items-end mb-2 position-absolute top-0 end-0 mt-2 me-2" href="index.php" style="width: max-content;">Kembali</a>
                </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php 
    endforeach;
    }
