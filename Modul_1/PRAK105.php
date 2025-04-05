<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        tr:first-child td {
            background-color: red;
            color: black;
            font-size: 22px;
            text-align: center;
            padding: 20px;
        }
    </style>
    <title>SOAL 5</title>
</head>
<body>
    <?php
    $samsung = array("sam1" => "Samsung Galaxy S22", "sam2" => "Samsung Galaxy S22+", "sam3" => "Samsung Galaxy A03", "sam4" => "Samsung Galaxy XCover 5");
    ?>
    <table border="1">
        <tr>
            <td><b>Daftar Smartphone Samsung</b></td>
        </tr>
        <tr>
            <td> <?= $samsung['sam1']?> </td>
        </tr>
        <tr>
            <td> <?= $samsung['sam2']?> </td>
        </tr>
        <tr>
            <td> <?= $samsung['sam3']?> </td>
        </tr>
        <tr>
            <td> <?= $samsung['sam4']?> </td>
        </tr>
    </table>
</body>
</html>