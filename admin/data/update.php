<?php 
    require_once '../connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = $conn->query("SELECT * FROM buku WHERE Id_buku = '$id'");
        foreach($q as $dt) :
        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <h1 class="container-fluid mx-2">PERPUSTAKAAN SMKN 1 SUBANG</h1>
        <h2 class="mx-4">Halaman ubah data buku</h2>
        <div class="card container">
        <form action="procces_update.php" method="post">
            <input type="hidden" name="Id_buku" value="<?= $dt['Id_buku']?>" required><br>
            <div class="mb-3">
                <label for="" class="form-label">Nama Penerbit</label><br>
                <input type="text" name="Nama_buku" value="<?= $dt['Nama_buku']?>" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Penerbit</label><br>
                <input type="text" name="Nama_penerbit" value="<?= $dt['Nama_penerbit']?>" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah Buku</label><br>
                <input type="number" name="Jumlah_buku" value="<?= $dt['Jumlah_buku']?>" required>
            </div>
            <div class="mb-3">
                <label label for="" class="form-label">Tahun Terbit</label><br>
                <input type="date" name="Tahun_terbit" value="<?= $dt['Tahun_terbit']?>" required>
            </div>
            <input type="submit" name="submit" value="Ubah Data" class="d-flex" required>
        </form>
        <a class="btn btn-primary d-flex align-items-end mb-2" href="index.php" style="width: max-content;">Kembali</a>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php 
    endforeach;
    }
