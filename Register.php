<?php 
    require_once 'admin/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perpus SMKN 1 SUBANG</title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-5">
        <div class="card">
        <div class="card-header text-center">REGISTER</div>
        
        <form action="checkLogin.php" method="post">
            <div class="card-body">
                <label for="exampleInputEmail" class="form-label">Full Name</label>
                <div class="input-group mb-3">
                    <span span class="input-group-text" id="basic-addon1"><i class="bi bi-type"></i></span>
                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Nama_admin" aria-describedby="basic-addon1" id="Nama_admin">
                </div>
                <label for="exampleInputEmail" class="form-label">Email</label>
                <div class="input-group mb-3">
                    <span span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="Username">
                </div>
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="row mb-3">
                <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                <div class="text-center mt-2 ">Do you already have an account? <a href="Login.php">Login Here!</a></div>
                </div>
            </div>
        </form>
        
        </div>
      </div>    
        </div>
    </div>
      
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>