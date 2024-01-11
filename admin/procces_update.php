<?php 
    require_once 'connect.php';
    if(isset($_POST['submit'])){
        $id = $_POST['Id_buku'];
        $n_nama_buku = $_POST['Nama_buku'];
        $nama_penerbit = $_POST['Nama_penerbit'];
        $jumlah_buku = $_POST['Jumlah_buku'];
        $tahun_terbit = $_POST['Tahun_terbit'];

        $q = $conn->query("UPDATE buku SET Nama_buku = '$n_nama_buku', Nama_penerbit = '$nama_penerbit', Jumlah_buku = '$jumlah_buku', Tahun_terbit='$tahun_terbit' WHERE Id_buku = '$id'");
        if($q){
            echo "<script>alert('Data berhasil di ubah'); window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('Data gagal di ubah'); window.location.href='index.php'</script>";
        }
    }else{
        header('Location : index.php');
    }
?>