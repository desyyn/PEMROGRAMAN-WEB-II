<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['jumlah'] = $_POST['jumlah'];
} elseif (isset($_POST['tambah'])) {
    $_SESSION['jumlah'] += 1;
} elseif (isset($_POST['kurang'])) {
    if ($_SESSION['jumlah'] > 0) {
        $_SESSION['jumlah'] -= 1;
    }
} else {
    session_unset();
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img.star {
            width: 60px;
            height: 60px;
            margin: 3px;
        }
    </style>
</head>
<body>

<?php if (!isset($_SESSION['jumlah'])): ?>
    <form method="post">
        Jumlah bintang <input type="number" name="jumlah" required>
        <button type="submit" name="submit">Submit</button>
    </form>
<?php else: ?>
    <p>Jumlah bintang <?= $_SESSION['jumlah'] ?></p>

    <?php
    $i = 1;
    do {
        echo '<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png" class="star">';
        $i++;
    } while ($i <= $_SESSION['jumlah']);
    ?>

    <form method="post" style="margin-top: 10px;">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
<?php endif; ?>

</body>
</html>