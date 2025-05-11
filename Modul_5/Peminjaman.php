<?php
include 'Koneksi.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM peminjaman WHERE id_peminjaman = $id");
    header("Location: Peminjaman.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM peminjaman");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Peminjaman</h2>
    <a href="welcome.php" class="btn btn-primary mb-3">Kembali</a>
    <a href="FormPeminjaman.php" class="btn btn-primary mb-3 float-end">+ Tambah Data Baru</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>ID Member</th>
            <th>ID Buku</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id_peminjaman'] ?></td>
                <td><?= $row['tgl_pinjam'] ?></td>
                <td><?= $row['tgl_kembali'] ?></td>
                <td><?= $row['id_member'] ?></td>
                <td><?= $row['id_buku'] ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?= $row['id_peminjaman'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="?hapus=<?= $row['id_peminjaman'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
