<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error {
            color: red;
            font-size: 12px;
            margin-left: 5px;
        }
        .required-star {
            color: red;
            margin-left: 5px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <?php
    $nama = $nim = $gender = "";
    $validasiNama = $validasiNIM = $validasiGender = "";

    if (isset($_POST["submit"])) {
        $valid = true;

        if (empty($_POST["nama"])) {
            $validasiNama = "*Nama tidak boleh kosong";
            $valid = false;
        } else {
            $nama = $_POST["nama"];
        }

        if (empty($_POST["nim"])) {
            $validasiNIM = "*NIM tidak boleh kosong";
            $valid = false;
        } else {
            $nim = $_POST["nim"];
        }

        if (empty($_POST["gender"])) {
            $validasiGender = "*Jenis kelamin tidak boleh kosong";
            $valid = false;
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>

    <form action="" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <span class="required-star">*</span>
        <span class="error"><?php echo $validasiNama; ?></span><br><br>

        <label>NIM:</label>
        <input type="text" name="nim" value="<?php echo htmlspecialchars($nim); ?>">
        <span class="required-star">*</span>
        <span class="error"><?php echo $validasiNIM; ?></span><br><br>

        <label>Jenis Kelamin:</label>
        <span class="required-star">*</span>
        <span class="error"><?php echo $validasiGender; ?></span><br>
        <input type="radio" name="gender" value="Laki-laki">Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan">Perempuan<br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"]) && $valid) {
        echo "<h3>Output:</h3>";
        echo $nama . "<br>";
        echo $nim . "<br>";
        echo $gender . "<br>";
    }
    ?>
</body>
</html>