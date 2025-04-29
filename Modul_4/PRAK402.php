<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 30px;
            text-align: center;
        }
        th {
            background-color: #d3d3d3;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
];

foreach ($mahasiswa as &$data) {
    $nilaiAkhir = (0.4 * $data['uts']) + (0.6 * $data['uas']);
    $data['nilaiAkhir'] = $nilaiAkhir;

    if ($nilaiAkhir >= 80) {
        $data['huruf'] = 'A';
    } elseif ($nilaiAkhir >= 70) {
        $data['huruf'] = 'B';
    } elseif ($nilaiAkhir >= 60) {
        $data['huruf'] = 'C';
    } elseif ($nilaiAkhir >= 50) {
        $data['huruf'] = 'D';
    } else {
        $data['huruf'] = 'E';
    }
}
unset($data); 

echo "<table>";
echo "<tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
      </tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['uts']}</td>";
    echo "<td>{$mhs['uas']}</td>";
    echo "<td>" . number_format($mhs['nilaiAkhir'], 1) . "</td>";
    echo "<td>{$mhs['huruf']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>