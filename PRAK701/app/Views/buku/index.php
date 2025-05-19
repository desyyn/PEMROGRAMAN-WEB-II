<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fffdec;
        }
        .mb-4 {
            text-align: center;
        }
        .custom-btn {
            background-color: #907070 !important;
            color: #fffdec !important;
            font-weight: bold;
            border: none;
        }
        .custom-btn:hover { background-color: #7a5a5a; color: #fffdec;}
    </style>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <div class="container my-5">
        <h2 class="mb-4">Daftar Buku</h2>
       <a href="/buku/create" class="btn custom-btn mb-3">+ Tambah Buku</a>
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $b): ?>
                    <tr>
                        <td><?= esc($b['judul']) ?></td>
                        <td><?= esc($b['penulis']) ?></td>
                        <td><?= esc($b['penerbit']) ?></td>
                        <td><?= esc($b['tahun_terbit']) ?></td>
                        <td>
                            <a href="/buku/edit/<?= $b['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/buku/delete/<?= $b['id'] ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="/logout" class="btn btn-secondary">Logout</a>
         <?= $this->include('layout/footer') ?>
    </div>
</body>
</html>