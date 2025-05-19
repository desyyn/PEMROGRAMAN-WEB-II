<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
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
        .custom-btn:hover {
            background-color: #7a5a5a; color: #fffdec;}
    </style>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <div class="container my-5">
        <h2 class="mb-4">Tambah Buku</h2>

        <?php if(session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach(session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <form method="post" action="/buku/store">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" required>
            </div>
            <button type="submit" class="btn custom-btn">Simpan</button>
            <a href="/buku" class="btn btn-secondary ms-2">Kembali</a>
        </form>
         <?= $this->include('layout/footer') ?>
    </div>
</body>
</html>