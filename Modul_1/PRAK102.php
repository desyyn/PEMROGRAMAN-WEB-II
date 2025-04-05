<?php
$jariJari = 4.2;
$phi = pi();
$volume = (4/3) * $phi * pow($jariJari, 3);

echo number_format($volume, 3, ',', '') . " m3";
?>