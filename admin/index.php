<?php 
    //panggil connect
    require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN SMKN 1 SBG</title>
</head>
<body>
    <h1>PERPUS SMKN 1 SBG</h1>
    <!-- Create atau menambahkan data baru, Data akan di proses dan dikirim ke add.php -->
    <form method="post" action="add.php">
        <input type="text" name="Nama_buku" placeholder="Nama Buku" required><br>
        <input type="text" name="Nama_penerbit" placeholder="Nama Penerbit" required><br>
        <input type="number" name="Jumlah_buku" placeholder="Jumlah Buku" required><br>
        <input type="date" name="Tahun_terbit" placeholder="Tahun terbit" required><br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    <!-- read atau menampilka data dari database -->
    <table border="1">              
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Nama Penerbit</th>
            <th>Jumlah buku</th>
            <th>Tahun terbit</th>
            <th colspan="2">Aksi</th>
        </tr>
    
    <?php
        //tampilkan semua data 
        $q = $conn->query("SELECT * FROM buku");
        $no = 1;//kode buku
        while($dt = $q->fetch_assoc()):
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $dt['Nama_buku']?></td>
            <td><?= $dt['Nama_penerbit']?></td>
            <td><?= $dt['Jumlah_buku']?></td>
            <td><?= $dt['Tahun_terbit']?></td>
            <td><a href="update.php?id=<?= $dt['Id_buku']?>">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['Id_buku']?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a></td>
        </tr>
    <?php 
        endwhile;
    ?>
    </table>
</body>
</html>