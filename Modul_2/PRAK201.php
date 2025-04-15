<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="POST">
        Nama 1: <input type="Text" name="nama1"><br>
        Nama 2: <input type="Text" name="nama2"><br>
        Nama 3: <input type="Text" name="nama3"><br>
        <button type="submit" name="Urut">Urutkan</button>
    </form>

<?php
if (isset($_POST["Urut"])) {
    $input1 = ($_POST["nama1"]);
    $input2 = ($_POST["nama2"]);
    $input3 = ($_POST["nama3"]);

    $nama_pertama = $input1;
    $nama_kedua = $input2;
    $nama_ketiga = $input3;

    if ($nama_pertama > $nama_kedua) {
        $temp = $nama_pertama;
        $nama_pertama = $nama_kedua;
        $nama_kedua = $temp;
    }
    if ($nama_pertama > $nama_ketiga) {
        $temp = $nama_pertama;
        $nama_pertama = $nama_ketiga;
        $nama_ketiga = $temp;
    }
    if ($nama_kedua > $nama_ketiga) {
        $temp = $nama_kedua;
        $nama_kedua = $nama_ketiga;
        $nama_ketiga = $temp;
    }

    echo "<h3>Output:</h3>";
    echo $nama_pertama . "<br>";
    echo $nama_kedua . "<br>";
    echo $nama_ketiga . "<br>";
}
?>
</body>
</html>