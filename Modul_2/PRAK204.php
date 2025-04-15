<!DOCTYPE html>
<<html lang="en">>
<body>
    <form method="POST">
        Nilai: <input type="number" name="angka" min="0"><br>
        <input type="submit" name="submit" value="Konversi"><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];
    
        if ($angka < 0 || $angka >= 1000) {
            echo "<b> Hasil: Anda Menginput Melebihi Limit Bilangan </b>";
        } else {
            if ($angka == 0) {
                echo "<b> Hasil: Nol </b>";
            } elseif ($angka >= 1 && $angka <= 9) {
                echo "<b> Hasil: Satuan </b>";
            } elseif ($angka >= 10 && $angka <= 19) {
                echo "<b> Hasil: Belasan </b>";
            } elseif ($angka >= 20 && $angka <= 99) {
                echo "<b> Hasil: Puluhan </b>";
            } elseif ($angka >= 100 && $angka <= 999) {
                echo "<b> Hasil: Ratusan </b>";
            }
        }
    }    
    ?>
</body>
</html>