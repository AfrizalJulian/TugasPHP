<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
</head>
<body>
    <?php
    $nama = "";
    $pekerjaan = "";
    $hobby = "";

    // Cek apakah tombol "Simpan" sudah diklik
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $nama = $_POST["nama"];
        $pekerjaan = $_POST["Pekerjaan"];
        $hobby = $_POST["hobby"];
    }
    ?>

    <form method="POST" action="">
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br><br>
        Pekerjaan:
        <select name="Pekerjaan">
            <option value="Pekerjaan1">Pekerjaan 1</option>
            <option value="Pekerjaan2">Pekerjaan 2</option>
            <option value="Pekerjaan3">Pekerjaan 3</option>
            <option value="Pekerjaan4">Pekerjaan 4</option>
            <option value="Pekerjaan5">Pekerjaan 5</option>
            <option value="Pekerjaan6">Pekerjaan 6</option>
            <option value="Pekerjaan7">Pekerjaan 7</option>
            <option value="Pekerjaan8">Pekerjaan 8</option>
            <option value="Pekerjaan9">Pekerjaan 9</option>
            <option value="Pekerjaan10">Pekerjaan 10</option>
            <!-- Tambahkan pilihan pekerjaan lainnya sampai pekerjaan 10 -->
        </select><br><br>
        Hobby:<br>
        <?php
        // Loop untuk membuat radio button hobby
        for ($i = 1; $i <= 10; $i++) {
            $hobbyValue = "hobby" . $i;
            echo "<input type='radio' name='hobby' value='$hobbyValue'";
            if ($hobby == $hobbyValue) {
                echo " checked";
            }
            echo "> Hobby $i<br>";
        }
        ?><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    // Tampilkan data dalam tabel jika tombol "Simpan" sudah diklik
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Data Diri:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
        echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>