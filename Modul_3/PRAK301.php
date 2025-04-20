<!DOCTYPE html>
<html lang="en">
    <body>
        <form action="" method="post">
            Jumlah Peserta: <input type="text" name="peserta" value="<?= $_POST['peserta'] ?? '' ?>"><br>
            <button type="submit" name="submit">Cetak</button><br>
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $jumlah = $_POST['peserta'];

            $i = 1;
            while($i <= $jumlah) {
                if($i % 2 != 0){
                    echo "<b><font color='red'>Peserta ke-$i</font></b>";
                }
                else{
                    echo "<b><font color='green'>Peserta ke-$i</font></b>";
                }
                echo "<br><br>";
                $i++;

            }
        }
        ?>
    </body>
</html>