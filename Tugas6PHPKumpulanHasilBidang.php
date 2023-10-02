<?php
include 'Tugas6PHPBentuk2D.php';

// Membuat objek bidang
$lingkaran = new Lingkaran(7);
$persegiPanjang = new PersegiPanjang(5, 4);
$segitiga = new Segitiga(7, 9);

// Data untuk tabel
$dataBidang = [
    ["1", $lingkaran->namaBidang(), "Luas: 3.14 * jari-jari (7²), Keliling: 2 * 3.14 * jari-jari (7)", $lingkaran->luasBidang(), $lingkaran->kelilingBidang()],
    ["2", $persegiPanjang->namaBidang(), "Luas: Panjang (5) x lebar (4), Keliling: 2 x (panjang (5) + lebar (4))", $persegiPanjang->luasBidang(), $persegiPanjang->kelilingBidang()],
    ["3", $segitiga->namaBidang(), "Luas: 0.5 x alas (7) x tinggi (9), Keliling: Tidak dapat dihitung karena tidak tahu jenis segitiga apa yang di maksud.", $segitiga->luasBidang(), $segitiga->kelilingBidang()]
];

// Membuat tabel
echo '<table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan & Rumus</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>';

foreach ($dataBidang as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}

echo '</tbody></table>';
?>