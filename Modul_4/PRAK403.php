<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #d3d3d3;
            text-align: center;
        }
        .revisi {
            background-color: red;
            color: black;
            text-align: center;
        }
        .tidak-revisi {
            background-color: green;
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$krs = [
    ["nama" => "Ridho", "matkul" => [
        ["nama" => "Pemrograman I", "sks" => 2],
        ["nama" => "Praktikum Pemrograman I", "sks" => 1],
        ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["nama" => "Arsitektur Komputer", "sks" => 3],
    ]],
    ["nama" => "Ratna", "matkul" => [
        ["nama" => "Basis Data I", "sks" => 2],
        ["nama" => "Praktikum Basis Data I", "sks" => 1],
        ["nama" => "Kalkulus", "sks" => 3],
    ]],
    ["nama" => "Tono", "matkul" => [
        ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
        ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
        ["nama" => "Komputasi Awan", "sks" => 3],
        ["nama" => "Kecerdasan Bisnis", "sks" => 3],
    ]],
];

foreach ($krs as &$data) {
    $total_sks = 0;
    foreach ($data['matkul'] as $matkul) {
        $total_sks += $matkul['sks'];
    }
    $data['total_sks'] = $total_sks;
    if ($total_sks < 7) {
        $data['keterangan'] = "Revisi KRS";
    } else {
        $data['keterangan'] = "Tidak Revisi";
    }
}
unset($data); 

echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>";

foreach ($krs as $no => $data) {
    $first_row = true;
    foreach ($data['matkul'] as $matkul) {
        echo "<tr>";
        if ($first_row) {
            echo "<td>" . ($no + 1) . "</td>";
            echo "<td>{$data['nama']}</td>";
        } else {
            echo "<td></td><td></td>";
        }
        echo "<td>{$matkul['nama']}</td>";
        echo "<td>{$matkul['sks']}</td>";

        if ($first_row) {
            echo "<td>{$data['total_sks']}</td>";

            if ($data['keterangan'] == "Revisi KRS") {
                echo "<td class='revisi'>{$data['keterangan']}</td>";
            } else {
                echo "<td class='tidak-revisi'>{$data['keterangan']}</td>";
            }
            $first_row = false;
        } else {
            echo "<td></td><td></td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
?>
</body>
</html>