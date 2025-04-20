<!DOCTYPE html>
<html lang="en"> 
<body>

<form method="post">
    <input type="text" name="input" required value="<?=isset($_POST['input']) ? $_POST['input'] : ''?>">
    <button type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    $panjang = strlen($input);

    echo "<p><strong>Input:</strong><br>$input</p>";
    echo "<p><strong>Output:</strong><br>";

    for ($i = 0; $i < $panjang; $i++) {
        $huruf = $input[$i];
        echo strtoupper($huruf); 
        echo str_repeat(strtolower($huruf), $panjang - 1); 
    }
    echo "</p>";
}
?>

</body>
</html>