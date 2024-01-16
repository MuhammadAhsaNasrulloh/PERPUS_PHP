<?php 
    require_once 'admin/connect.php';
    if(isset($_POST['submit'])){
        $id_admin = $_POST['id_admin'];
        $n_admin = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q = $conn->query("INSERT INTO admin (Id_admin, Nama_admin, Username, password) VALUES ('$id_admin', '$n_admin', '$username', '$password')");
    
        if($q){
            echo"<script>alert('Registrasi berhasil silahkan LogIn ulang!'); window.location.href = 'Login.php'</script>";
        }else{
            echo"<script>alert('Registrasi Gagal silahkan Registrasi ulang!'); window.location.href = 'Register.php'</script>";
        }
    }else{
        header('Location : Register.php');
    }

?>