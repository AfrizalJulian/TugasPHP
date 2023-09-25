<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
</head>
<body>
    <h3>Data Nilai Mahasiswa</h3>
<?php
// Data mahasiswa dan nilai
$daftar_mahasiswa = [
    ["No" => 1, "NIM" => "0520214001", "Nama Mahasiswa" => "Joy", "Nilai" => 75],
    ["No" => 2, "NIM" => "0520214002", "Nama Mahasiswa" => "Angela", "Nilai" => 90],
    ["No" => 3, "NIM" => "0520214003", "Nama Mahasiswa" => "Rafaela", "Nilai" => 70],
    ["No" => 4, "NIM" => "0520214004", "Nama Mahasiswa" => "Zilong", "Nilai" => 55],
    ["No" => 5, "NIM" => "0520214005", "Nama Mahasiswa" => "Badang", "Nilai" => 80],
    ["No" => 6, "NIM" => "0520214006", "Nama Mahasiswa" => "Fredrin", "Nilai" => 85],
    ["No" => 7, "NIM" => "0520214007", "Nama Mahasiswa" => "Martis", "Nilai" => 80],
    ["No" => 8, "NIM" => "0520214008", "Nama Mahasiswa" => "Edith", "Nilai" => 75],
    ["No" => 9, "NIM" => "0520214009", "Nama Mahasiswa" => "Irithel", "Nilai" => 90],
    ["No" => 10, "NIM" => "05202140010", "Nama Mahasiswa" => "Khaleed", "Nilai" => 70],
];

// Menginisialisasi variabel untuk agregasi nilai
$nilai_tertinggi = -1;
$nilai_terendah = 101;
$total_nilai = 0;
$jumlah_mahasiswa = count($daftar_mahasiswa);

echo "<table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>";

foreach ($daftar_mahasiswa as $mahasiswa) {
    // Menghitung agregasi nilai
    $nilai = $mahasiswa["Nilai"];
    $total_nilai += $nilai;
    if ($nilai > $nilai_tertinggi) {
        $nilai_tertinggi = $nilai;
    }
    if ($nilai < $nilai_terendah) {
        $nilai_terendah = $nilai;
    }

    // Menentukan keterangan (lulus/tidak lulus)
    $keterangan = $nilai >= 60 ? "Lulus" : "Tidak Lulus";

    // Menentukan grade
    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 80) {
        $grade = "B";
    } elseif ($nilai >= 70) {
        $grade = "C";
    } elseif ($nilai >= 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Menentukan predikat menggunakan switch case
    switch ($grade) {
        case "A":
            $predikat = "Sangat Baik";
            break;
        case "B":
            $predikat = "Baik";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "";
    }

    // Menampilkan data dalam tabel
    echo "<tr>
            <td>{$mahasiswa["No"]}</td>
            <td>{$mahasiswa["NIM"]}</td>
            <td>{$mahasiswa["Nama Mahasiswa"]}</td>
            <td>{$nilai}</td>
            <td>{$keterangan}</td>
            <td>{$grade}</td>
            <td>{$predikat}</td>
          </tr>";
}

echo "</tbody>
    <tfoot>
        <tr>
            <td colspan='3'>Total</td>
            <td>{$total_nilai}</td>
            <td colspan='3'>Jumlah Mahasiswa: {$jumlah_mahasiswa}</td>
        </tr>
        <tr>
            <td colspan='3'>Nilai Tertinggi</td>
            <td>{$nilai_tertinggi}</td>
            <td colspan='3'>Nilai Terendah</td>
            <td>{$nilai_terendah}</td>
        </tr>
        <tr>
            <td colspan='3'>Nilai Rata-rata</td>
            <td>" . number_format($total_nilai / $jumlah_mahasiswa, 2) . "</td>
            <td colspan='3'>Jumlah Keseluruhan Nilai</td>
            <td>{$total_nilai}</td>
        </tr>
    </tfoot>
</table>";
?>
</body>
</html>