<?php 
    require_once '../connect.php';
    if(isset($_POST['submit'])){
        $id_anggota = $_POST['Id_anggota'];
        $n_anggota = $_POST['Nama_anggota'];
        $jurusan = $_POST['Jurusan_anggota'];
        $kelas = $_POST['kelas_anggota'];
        $kelamin = $_POST['jenis_kelamin'];
    // kode buku bernilai null atau '' karena kita set auto incerement
    $q = $conn->query("INSERT INTO anggota (Id_anggota, Nama_anggota, Jurusan_anggota, kelas_anggota, jenis_kelamin) VALUES ('$id_anggota', '$n_anggota', '$jurusan', '$kelas', '$kelamin')");
    
    if($q){
        //pesan jika data tersimpan
        echo "<script>alert('Data berhasil disimpan'); window.location.href='index_member.php'</script>";
    }else{
        //pesan jika data gagal tersimpan
        echo "<script>alert('Data gagal di simpan'); window.location.href='index_member.php'</script>";
    }
    }else{
        // jika coba akses langsung halaman ini akan diredirect ke halaman index
        header('Location : index_member.php');
    }
?>