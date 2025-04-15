<!DOCTYPE html>
<<html lang="en">>
<body>
    <form method="POST">
        Nilai : <input type="number" name="nilai" step="any" required><br><br>

        Dari :<br>
        <input type="radio" name="dari" value="C"> Celcius<br>
        <input type="radio" name="dari" value="F"> Fahrenheit<br>
        <input type="radio" name="dari" value="Re"> Reamur<br>
        <input type="radio" name="dari" value="K"> Kelvin<br><br>

        Ke :<br>
        <input type="radio" name="ke" value="C"> Celcius<br>
        <input type="radio" name="ke" value="F"> Fahrenheit<br>
        <input type="radio" name="ke" value="Re"> Reamur<br>
        <input type="radio" name="ke" value="K"> Kelvin<br><br>

        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = floatval($_POST['nilai']);
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

        if ($dari === $ke) {
            $hasil = $nilai;
        } else {
            switch ($dari) {
                case 'C': $celcius = $nilai; break;
                case 'F': $celcius = ($nilai - 32) * 5/9; break;
                case 'Re': $celcius = $nilai * 5/4; break;
                case 'K': $celcius = $nilai - 273.15; break;
            }

            switch ($ke) {
                case 'C': $hasil = $celcius; break;
                case 'F': $hasil = ($celcius * 9/5) + 32; break;
                case 'Re': $hasil = $celcius * 4/5; break;
                case 'K': $hasil = $celcius + 273.15; break;
            }
        }

        $simbol = [
            'C' => '°C',
            'F' => '°F',
            'Re' => '°Re',
            'K' => 'K'
        ];

        echo "<h3>Hasil Konversi: " . round($hasil, 1) . " {$simbol[$ke]}</h3>";
    }
    ?>
</body>
</html>