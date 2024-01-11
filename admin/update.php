<?php 
    require_once 'connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = $conn->query("SELECT * FROM buku WHERE Id_buku = '$id'");
        foreach($q as $dt) :
        ?>
        <h1>PERPUSTAKAAN SMKN 1 SBG</h1>
        <h2>Halaman ubah data buku</h2>
        <form action="procces_update.php" method="post">
            <input type="hidden" name="Id_buku" value="<?= $dt['Id_buku']?>" required>
            <input type="text" name="Nama_buku" value="<?= $dt['Nama_buku']?>" required>
            <input type="text" name="Nama_penerbit" value="<?= $dt['Nama_penerbit']?>" required>
            <input type="number" name="Jumlah_buku" value="<?= $dt['Jumlah_buku']?>" required>
            <input type="date" name="Tahun_terbit" value="<?= $dt['Tahun_terbit']?>" required>

            <input type="submit" name="submit" value="Ubah Data" required>
        </form>
    <?php 
    endforeach;
    }
