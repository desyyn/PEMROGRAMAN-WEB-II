<!DOCTYPE html>
<html lang="en">
    <body>
        <form action="" method="POST"> 
            Panjang: <input type="number" name="panjang" value="<?=isset($_POST['panjang']) ? $_POST['panjang'] : ''?>"><br>
            Lebar: <input type="number" name="lebar" value="<?=isset($_POST['lebar']) ? $_POST['lebar'] : ''?>"><br>
            Nilai: <input type="text" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"><br>
            <button type="submit" name="cetak">Cetak</button>
         </form>

         <?php
        if(isset($_POST['cetak'])) {
            $panjang = (int)$_POST['panjang'];
            $lebar = (int)$_POST['lebar'];
            $nilaiInput = $_POST['nilai'];

            $nilaiMatrix = explode(' ', $nilaiInput);

            if(count($nilaiMatrix) != ($panjang * $lebar)) {
                echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
            } else {
                echo "<table border='1' cellpadding='5' cellspacing='0'>";
                $index = 0;
                for($i = 0; $i < $panjang; $i++) {
                    echo "<tr>";
                    for($j = 0; $j < $lebar; $j++) {
                        echo "<td>" . htmlspecialchars($nilaiMatrix[$index]) . "</td>";
                        $index++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
    </body>
</html>