<?php
include 'Koneksi.php';

$id = $_GET['id'] ?? '';
$tgl_pinjam = $tgl_kembali = $id_member = $id_buku = '';

$members = mysqli_query($conn, "SELECT * FROM member");
$books = mysqli_query($conn, "SELECT * FROM buku");

if ($id) {
    $query = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjaman = $id");
    $data = mysqli_fetch_assoc($query);
    $tgl_pinjam = $data['tgl_pinjam'];
    $tgl_kembali = $data['tgl_kembali'];
    $id_member = $data['id_member'];
    $id_buku = $data['id_buku'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];

    if ($id) {
        mysqli_query($conn, "UPDATE peminjaman SET tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', id_member='$id_member', id_buku='$id_buku' WHERE id_peminjaman=$id");
    } else {
        mysqli_query($conn, "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_member, id_buku) VALUES ('$tgl_pinjam', '$tgl_kembali', '$id_member', '$id_buku')");
    }

    header('Location: Peminjaman.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit Peminjaman' : 'Tambah Peminjaman' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center mb-4"><?= $id ? 'Edit' : 'Tambah' ?> Peminjaman</h2>
    <form method="post">
        <div class="mb-3">
            <label>Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" class="form-control" value="<?= $tgl_pinjam ?>" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Pengembalian</label>
            <input type="date" name="tgl_kembali" class="form-control" value="<?= $tgl_kembali ?>" required>
        </div>
        <div class="mb-3">
            <label>Member</label>
            <select name="id_member" class="form-control" required>
                <option value="">-- Pilih Member --</option>
                <?php while ($m = mysqli_fetch_assoc($members)) : ?>
                    <option value="<?= $m['id_member'] ?>" <?= $m['id_member'] == $id_member ? 'selected' : '' ?>>
                        <?= $m['id_member'] ?> - <?= $m['nama_member'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Buku</label>
            <select name="id_buku" class="form-control" required>
                <option value="">-- Pilih Buku --</option>
                <?php while ($b = mysqli_fetch_assoc($books)) : ?>
                    <option value="<?= $b['id_buku'] ?>" <?= $b['id_buku'] == $id_buku ? 'selected' : '' ?>>
                        <?= $b['id_buku'] ?> - <?= $b['judul_buku'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="Peminjaman.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>