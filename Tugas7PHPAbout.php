<?php
  include_once 'top.php';
  include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <h1>About Me</h1>
    <?php
        $nama = "Afrizal Julianur";
        $umur = 20;
        $kesibukan = "Kuliah";
        $alamat = "Jalan Sirsak Gang Kopi No.73 RT009/04, Ciganjur, Jagakarsa, Jakarta Selatan";
        $hobi = "Olahraga Futsal & Main Game";
    ?>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Umur: <?php echo $umur; ?> tahun</p>
    <p>Kesibukan: <?php echo $kesibukan; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>Hobi: <?php echo $hobi; ?></p>
</div>
</div>

<?php
 include_once 'bottom.php';
?>