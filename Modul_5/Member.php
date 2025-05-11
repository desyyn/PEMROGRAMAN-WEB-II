<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2 class="text-center">Daftar Member</h2>
    <a href="welcome.php" class="btn btn-primary mb-3">Kembali</a>
    <a href="FormMember.php" class="btn btn-primary mb-3 float-end">+ Tambah Member</a>
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM member";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id_member']}</td>
                        <td>{$row['nama_member']}</td>
                        <td>{$row['nomor_member']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['tgl_mendaftar']}</td>
                        <td>{$row['tgl_terakhir_bayar']}</td>
                        <td>
                            <a href='FormMember.php?id={$row['id_member']}' class='btn btn-sm btn-primary'>Edit</a>
                            <a href='HapusMember.php?id={$row['id_member']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Yakin ingin hapus?')\">Hapus</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>Tidak ada data member</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
