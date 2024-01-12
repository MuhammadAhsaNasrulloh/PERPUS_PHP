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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>PERPUS SMKN 1 SBG</h1>
    <!-- Create atau menambahkan data baru, Data akan di proses dan dikirim ke add.php -->
    
    <div class="card">
    <div class="card mt-5">
    <div class="card-body">
    <div class="card-title"><h3>Formulir Data Buku</h3></div>
    <form method="post" action="add.php">
        <div class="mb-3">
            <label for="" class="form-label">Nama Buku</label><br>
            <input type="text" name="Nama_buku" placeholder="Nama Buku" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Penerbit</label><br>
            <input type="text" name="Nama_penerbit" placeholder="Nama Penerbit" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jumlah Buku</label><br>
            <input type="number" name="Jumlah_buku" placeholder="Jumlah Buku" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tahun Terbit</label><br>
            <input type="date" name="Tahun_terbit" placeholder="Tahun terbit" required><br>
        </div>
        <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
    <!-- read atau menampilka data dari database -->
    <table class="table table-dark table-striped mt-5">
        <thead>              
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Nama Penerbit</th>
            <th scope="col">Jumlah buku</th>
            <th scope="col">Tahun terbit</th>
            <th scope="col" colspan="2">Aksi</th>
        </tr>
        </thead>
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
            <td><a href="update.php?id=<?= $dt['Id_buku']?>" class="text-light">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['Id_buku']?>" class="text-light" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a></td>
        </tr>
    <?php 
        endwhile;
    ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>