<?php 
    require_once 'connect.php';
    if(isset($_POST['submit'])){
        $n_nama_buku = $_POST['Nama_buku'];
        $nama_penerbit = $_POST['Nama_penerbit'];
        $jumlah_buku = $_POST['Jumlah_buku'];
        $tahun_terbit = $_POST['Tahun_terbit'];
    // kode buku bernilai null atau '' karena kita set auto incerement
    $q = $conn->query("INSERT INTO buku (Nama_buku, Nama_penerbit, Jumlah_buku, Tahun_terbit) VALUES ('$n_nama_buku', '$nama_penerbit', '$jumlah_buku', '$tahun_terbit')");
    
    if($q){
        //pesan jika data tersimpan
        echo "<script>alert('Data berhasil disimpan'); window.location.href='index.php'</script>";
    }else{
        //pesan jika data gagal tersimpan
        echo "<script>alert('Data gagal di simpan'); window.location.href='admin/index.php'</script>";
    }
    }else{
        // jika coba akses langsung halaman ini akan diredirect ke halaman index
        header('Location : admin/index.php');
    }
?>