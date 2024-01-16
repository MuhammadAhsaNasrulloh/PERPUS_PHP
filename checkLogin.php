<?php
session_start();
include("admin/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_admin = mysqli_real_escape_string($conn, $_POST['id_admin']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin WHERE Id_admin = '$id_admin' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        $_SESSION['id_admin'] = $id_admin;
        echo "<script>alert('Login Berhasil');window.location='admin/dashboard.php'</script>";
         // Ganti dengan halaman setelah login berhasil
    } else {
        // Login gagal
        echo "Login failed. Invalid username or password.";
    }
}

$conn->close();
?>
