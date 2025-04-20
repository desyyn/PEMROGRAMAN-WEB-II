<!DOCTYPE html>
<html lang="en">
<body>
<form action="" method="post">
        Tinggi : <input type="number" name="tinggi" min="1" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>">
        <br>
        Alamat Gambar : <input type="url" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>">
        <br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
    <?php
        if(isset($_POST["cetak"])){
            $tinggi = $_POST['tinggi'];
            $alamat = $_POST['alamat'];
            
            $baris = 1;
            while ($baris <= $tinggi) {
                $jumlahSpasi = 1;
                while ($jumlahSpasi <= $baris) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    $jumlahSpasi++;
                }

                $jumlahGambar = $tinggi;
                while ($jumlahGambar >= $baris) {
                    echo '<img src="' . $alamat . '" width="20px" height="20px">';
                    $jumlahGambar--;
                }

                echo "<br>";
                $baris++;
            }
        }
    ?>
</body>
</html>