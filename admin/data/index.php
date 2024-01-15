<?php 
    // Panggil connect.php menggunakan path relatif
    require_once '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN SMKN 1 SBG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
</head>
<body>
<div class="main-cointaier d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                
                <h1 class="fs-4"><span class="bg-white text-dark rounded-2 shadow px-2 me-2">PERPUS</span><span class="text-white">SMKN 1 SUBANG</span></h1>
               
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../dashboard.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                    <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-box-seam me-2"></i>Data Buku</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-people-fill me-2"></i>Data Anggota</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-archive me-2"></i>Data Peminjam</a></li>
                </ul>
                
                <hr class="h-color mx-3">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-gear me-2"></i>Setting</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person-circle me-2"></i>Account</a></li>
                </ul>
            </div>

        </div>
        <!-- sidebar end -->
        <!-- content section -->
        <div class="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Perpustakaan<ion-icon name="book-outline" class="ms-2"></ion-icon></a>
                <button button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex justify-content-between">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../dashboard.php">Dashboard</a>
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
            </div>
        </nav>
            <div class="card">
    <div class="card mt-3">
    <div class="card-body">
    <div class="card-title ms-2"><h3>Formulir Data Buku</h3></div>
    <form method="post" action="add.php" class="ms-2">
        <div class="mb-3">
            <label for="" class="form-label">Nama Buku</label><br>
            <input type="text" name="Nama_buku" placeholder="Nama Buku" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Penerbit</label><br>
            <input type="text" name="Nama_penerbit" placeholder="Nama Penerbit" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jumlah Buku</label><br>
            <input type="number" name="Jumlah_buku" placeholder="Jumlah Buku" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tahun Terbit</label><br>
            <input type="date" name="Tahun_terbit" placeholder="Tahun terbit" required><br>
        </div>
        <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
    <!-- read atau menampilka data dari database -->
    <table class="table table-success table-striped mt-3">
        <thead>              
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Nama Penerbit</th>
            <th scope="col">Jumlah buku</th>
            <th scope="col">Tahun terbit</th>
            <th scope="col" colspan="2">Aksi</th>
        </tr>
        </thead>
    <?php
        //tampilkan semua data 
        $q = $conn->query("SELECT * FROM buku");
        $no = 1;//kode buku
        while($dt = $q->fetch_assoc()):
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $dt['Nama_buku']?></td>
            <td><?= $dt['Nama_penerbit']?></td>
            <td><?= $dt['Jumlah_buku']?></td>
            <td><?= $dt['Tahun_terbit']?></td>
            <td><a href="update.php?id=<?= $dt['Id_buku']?>" class="text-dark">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['Id_buku']?>" class="text-dark" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a></td>
        </tr>
    <?php 
        endwhile;
    ?>
    </table>
            </div>
           
            <!-- content section end -->
    </div>
    
    <!-- Create atau menambahkan data baru, Data akan di proses dan dikirim ke add.php -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>