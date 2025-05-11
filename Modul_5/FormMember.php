<?php
include 'Koneksi.php';

$id = $_GET['id'] ?? '';
$nama = $nomor = $alamat = $tgl_daftar = $tgl_bayar = '';

if ($id) {
    $query = mysqli_query($conn, "SELECT * FROM member WHERE id_member = '$id'");
    $data = mysqli_fetch_assoc($query);
    if ($data) {
        $nama = $data['nama_member'];
        $nomor = $data['nomor_member'];
        $alamat = $data['alamat'];
        $tgl_daftar = $data['tgl_mendaftar'];
        $tgl_bayar = $data['tgl_terakhir_bayar'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_member'];
    $nomor = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = $_POST['tgl_mendaftar'];
    $tgl_bayar = $_POST['tgl_terakhir_bayar'];

    if ($id) {
        $sql = "UPDATE member SET 
                    nama_member = '$nama', 
                    nomor_member = '$nomor', 
                    alamat = '$alamat', 
                    tgl_mendaftar = '$tgl_daftar', 
                    tgl_terakhir_bayar = '$tgl_bayar' 
                WHERE id_member = '$id'";
    } else {
        $sql = "INSERT INTO member 
                    (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
                VALUES 
                    ('$nama', '$nomor', '$alamat', '$tgl_daftar', '$tgl_bayar')";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: Member.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $id ? 'Edit Member' : 'Tambah Member' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center"><?= $id ? 'Edit Member' : 'Tambah Member' ?></h2>
    <form method="post">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_member" class="form-control" value="<?= $nama ?>" required>
        </div>
        <div class="mb-3">
            <label>Nomor Member</label>
            <input type="text" name="nomor_member" class="form-control" value="<?= $nomor ?>" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= $alamat ?></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Mendaftar</label>
            <input type="datetime-local" name="tgl_mendaftar" class="form-control" 
            value="<?= $id ? date('Y-m-d\TH:i', strtotime($tgl_daftar)) : '' ?>" 
            <?= $id ? 'readonly' : 'required' ?>>
        </div>
        <div class="mb-3">
            <label>Tanggal Terakhir Bayar</label>
            <input type="date" name="tgl_terakhir_bayar" class="form-control" value="<?= $tgl_bayar ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="Member.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>