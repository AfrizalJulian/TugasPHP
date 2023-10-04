<?php
  include_once 'top.php';
  include_once 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div>
    
<div class="container-fluid px-4">
<h1>Data Pemain Sepak Bola</h1>
<?php
    // Data pemain sepak bola
    $pemain = array(
        array("Nama" => "Lionel Messi", "Usia" => 34, "Klub" => "Inter Miami"),
        array("Nama" => "Cristiano Ronaldo", "Usia" => 36, "Klub" => "Al-Nassr"),
        array("Nama" => "Neymar Jr.", "Usia" => 29, "Klub" => "Al-Hillal"),
        array("Nama" => "Kylian Mbappe", "Usia" => 22, "Klub" => "Paris Saint-Germain"),
        array("Nama" => "Sergio Ramos", "Usia" => 35, "Klub" => "Sevilla"),
    );
?>
 <table>
        <tr>
            <th>Nama</th>
            <th>Usia</th>
            <th>Klub</th>
        </tr>
        <?php
        // Menampilkan data pemain dalam tabel
        foreach ($pemain as $data) {
            echo "<tr>";
            echo "<td>" . $data["Nama"] . "</td>";
            echo "<td>" . $data["Usia"] . " tahun</td>";
            echo "<td>" . $data["Klub"] . "</td>";
            echo "</tr>";
        }
        ?>
 </table>

</body>
</html>

</div>
</div>

<?php
 include_once 'bottom.php';
?>