<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('background.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.4);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: white;
            font-size: 3em;
            font-weight: bold;
        }
        .subtext {
            color: white;
            font-size: 1.25em;
            margin-bottom: 40px;
        }
        .custom-btn {
            width: 300px;
            padding: 15px;
            font-size: 1.2em;
            border: none;
            margin: 10px 0;
            border-radius: 25px;
            font-weight: bold;
            color: white;
        }
        .btn-buku {
            background-color: #b3754a;
        }
        .btn-member {
            background-color: #6a5343;
        }
        .btn-peminjaman {
            background-color: #3c2312;
        }
        .custom-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>Perpustakaan Online</h1>
        <p class="subtext">Welcome to Our Library!</p>
        <a href="Buku.php" class="custom-btn btn-buku">Kelola Buku</a><br>
        <a href="Member.php" class="custom-btn btn-member">Kelola Member</a><br>
        <a href="Peminjaman.php" class="custom-btn btn-peminjaman">Kelola Peminjaman</a>
    </div>
</body>
</html>