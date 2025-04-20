<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    img.star {
      width: 20px;
      height: 20px;
      vertical-align: middle;
    }
  </style>
</head>
<body>
  <form method="POST">
    Batas Bawah: <input type="number" name="bawah" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>"><br>
    Batas Atas: <input type="number" name="atas" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>"><br>
    <button type="submit" name="cetak">Cetak</button>
  </form>

  <p>
    <?php
    if (isset($_POST['cetak'])) {
      $bawah = $_POST['bawah'];
      $atas = $_POST['atas'];

      $i = $bawah;
      do {
        if ((($i + 7) % 5) == 0) {
          echo '<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png" class="star"> ';
        } else {
          echo $i . " ";
        }
        $i++;
      } while ($i <= $atas);
    }
    ?>
  </p>
</body>
</html>