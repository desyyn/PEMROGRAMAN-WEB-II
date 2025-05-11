<?php
include 'Koneksi.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku=$id");
}

$result = mysqli_query($conn, "SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center">Daftar Buku</h2>
    <a href="welcome.php" class="btn btn-primary mb-3">Kembali</a>
    <a href="FormBuku.php" class="btn btn-primary mb-3 float-end">+ Tambah Buku Baru</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id_buku'] ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['penulis'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['tahun_terbit'] ?></td>
                <td>
                    <a href="FormBuku.php?id=<?= $row['id_buku'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="?hapus=<?= $row['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus buku?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>