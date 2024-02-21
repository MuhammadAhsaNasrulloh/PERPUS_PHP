<?php
session_start();
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
    <style>
        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    body {
        background-color: #e4e9f7;
    }
    .container-fluid{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
    }
    .box{
        width: 25rem;
        background: #fdfdfd;
        display: flex;
        flex-direction: column;
        padding: 25px 25px;
        border-radius: 20px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.3),
                    0 32px 64px -48px  rgba(0,0,0, 0.5);
    }

    .form-box header{
        font-size: 25px;
        font-weight: 600;
        padding-bottom: 10px;
        border-bottom: 1px solid #333;
        margin-bottom: 10px;
    }
    .form-box form .field{
        display: flex;
        margin-bottom: 10px;
        flex-direction: column;
    }

    .form-box form .input input{
        height: 35px;
        width: 100%;
        font-size: 16px;
        padding: 0 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
    }

    .btn-admin{
        background-color: #560bad;
        color: #ffff;
    }

    .btn-admin:hover{
        background-color: #8338ec;
    }

    .links{
        text-align: center;
        margin-bottom: 10px;
    }
    .btn-petugas{
        background-color: #2a9d8f;
        color: #ffff;
    }

    .btn-petugas:hover{
        background-color: #2a9d9f;
    }
    .btn-user{
        background-color: #264653;
        color: #ffff;
    }

    .btn-user:hover{
        background-color: #264680;
    }
    </style>
</head>
<body>
     <div class="container-fluid">
        <div class="box">
        <div class="form-box">
            <header class="header">Login</header>
            <form action="">
                <div class="field input">
                        <div class="btn btn-admin" ><a href="Login.php" class="text-light" style="text-decoration:none;">Admin</a></div>
                </div>
                <div class="field input">
                        <div class="btn btn-petugas" ><a href="Login.php" class="text-light" style="text-decoration:none;">Petugas</a></div>
                </div>
                <div class="field input">
                        <div class="btn btn-user" ><a href="Login.php" class="text-light" style="text-decoration:none;">User</a></div>
                </div>
            </form>
        </div>
        </div>
     </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>