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
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
     <div class="container-fluid">
        <div class="box">
        <div class="form-box">
            <header class="header">Sign Up</header>
            <form action="cekRegister.php" method="post">
                <div class="field input">
                    <label for="">Id Admin</label>
                    <input type="text" name="id_admin" id="id_admin" required>
                </div>
                <div class="field input">
                    <label for="">Full Name</label>
                    <input type="text" name="full_name" id="full_name" required>
                </div>
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="pasword" required>
                </div>
                <div class="field input">
                    <input type="submit" name="submit" value="Register" class="btn mt-2" required>
                </div>
                <div class="links">
                    <p class="title">Do you have an account? <a href="Login.php">Login now!</a> </p>
                </div>
            </form>
        </div>
        </div>
     </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>