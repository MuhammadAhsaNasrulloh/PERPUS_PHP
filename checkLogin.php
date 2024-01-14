<?php 
require_once 'admin/connect.php';
if(isset($_POST['btnSubmit'])){
    $n_admin = $_POST['Nama_admin'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
// kode buku bernilai null atau '' karena kita set auto incerement
    $q = $conn->query("INSERT INTO admin (Nama_admin, Username, password) VALUES ('$n_admin', '$username', '$password')");
    if($q){
        //pesan jika data tersimpan
        echo "<script>alert('Data berhasil disimpan'); window.location.href='Login.php'</script>";
    }else{
        //pesan jika data gagal tersimpan
        echo "<script>alert('Data gagal di simpan'); window.location.href='Register.php'</script>";
    }
}else{
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location : Login.php');
}
?>