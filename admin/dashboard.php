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
        
    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <!-- As a heading -->
    <!-- sidebar -->
    <div class="main-cointaier d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                
                <h1 class="fs-4"><span class="bg-white text-dark rounded-2 shadow px-2 me-2">PERPUS</span><span class="text-white">SMKN 1 SUBANG</span></h1>
               
                <ul class="list-unstyled px-2">
                    <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><ion-icon name="speedometer-outline" class="me-2"></ion-icon>Dashboard</a></li>
                    <li class=""><a href="index.php" class="text-decoration-none px-3 py-2 d-block"><ion-icon name="compass-outline" class="me-2"></ion-icon>Data Buku</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><ion-icon name="people" class="me-2"></ion-icon>Data Anggota</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><ion-icon name="receipt-outline" class="me-2"></ion-icon>Data Peminjam</a></li>
                </ul>
                
                <hr class="h-color mx-3">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><ion-icon name="settings" class="me-2"></ion-icon>Setting</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><ion-icon name="person-circle-outline" class="me-2"></ion-icon>Account</a></li>
                </ul>
            </div>

        </div>
        <!-- sidebar end -->
        <!-- content section -->
        <div class="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Perpustakaan</a>
                <ion-icon name="book-outline"></ion-icon>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
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