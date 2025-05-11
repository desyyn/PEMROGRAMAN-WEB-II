<?php
include 'Koneksi.php';

$id = $_GET['id'] ?? '';
$judul = $penulis = $penerbit = $tahun = '';

if ($id) {
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id");
    $data = mysqli_fetch_assoc($query);
    $judul = $data['judul_buku'];
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $tahun = $data['tahun_terbit'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];

    if ($id) {
        mysqli_query($conn, "UPDATE buku SET judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun' WHERE id_buku=$id");
    } else {
        mysqli_query($conn, "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahun')");
    }

    header('Location: Buku.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit Buku' : 'Tambah Buku' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center"><?= $id ? 'Edit Buku' : 'Tambah Buku' ?></h2>
    <form method="post">
        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control" value="<?= $judul ?>" required>
        </div>
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" value="<?= $penulis ?>" required>
        </div>
        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?= $penerbit ?>" required>
        </div>
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="<?= $tahun ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="Buku.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>