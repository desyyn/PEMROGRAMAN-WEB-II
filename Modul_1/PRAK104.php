<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOAL 4</title>
</head>
<body>
    <?php
    $samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy XCover 5");
    ?>
    <table border="1.5">
        <tr>
            <td><b>Daftar Smartphone Samsung</b></td>
        </tr>
        <?php foreach ($samsung as $item) : ?>
        <tr>
            <td><?= $item; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>