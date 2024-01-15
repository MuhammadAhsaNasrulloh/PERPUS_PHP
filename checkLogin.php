<?php
require_once 'admin/connect.php';
if(isset($_POST['submit'])){
    $id_admin = $_POST['id_admin'];
    $password = $_POST['password'];

    $q = $conn->query("SELECT * FROM admin WHERE Id_admin='$id_admin' AND password = '$password'");
    if($q){
        echo "<script>alert('SELAMAT DATANG KEMBALI'); window.location.href='admin/dashboard.php'</script>";
    }else{
        echo "<script>alert('Password atau Id Salah'); window.location.href='Login.php'</script>";
    }
}else{
    header('Location : Login.php');
}
?>