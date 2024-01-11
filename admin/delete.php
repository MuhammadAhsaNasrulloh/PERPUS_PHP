<?php
    require_once 'connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //perintah hapus data berdasarkan id yang diberikan
        $q = $conn->query("DELETE FROM buku WHERE Id_buku = '$id'");
        //cek command
        if($q){
            echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('Data gagal di hapus'); window.location.href='index.php'</script>";
        }
    }else{
        header('Location :index.php');
    }

?>