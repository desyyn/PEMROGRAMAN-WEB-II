<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Sistem Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fffdec; color: white; }
    .login-box {
      background-color: #907070;
      color: #fffdec;
      font-weight: bold;
      padding: 2rem;
      border-radius: 10px;
      max-width: 400px;
      margin: auto;
      margin-top: 5%;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
    }
    .btn btn-primary w-100 {
        color: #fffdec;
    }
    .welcome {
      color: #907070;
    }
  </style>
</head>
<body>
  <?= $this->include('layout/header') ?>
  <div class="welcome">
    <h1><center>˚ ༘♡ ·˚꒰ᥕᥱᥣᥴ᥆꧑ᥱ꒱ ₊˚ˑ༄</center></h1>
  </div>
  <div class="login-box">
    <h3 class="text-center mb-4"><b>Login</b></h3>
    <?php if(session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('login') ?>" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn w-100" style="background-color: #fffdec; color: #907070;">Login</button>
    </form>
  </div>
  <?= $this->include('layout/footer') ?>
</body>
</html>