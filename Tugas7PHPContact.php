<?php
  include_once 'top.php';
  include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <h1>Contact Me</h1>
    <?php
       $kontakEmail = "afrizalwalker@gmail.com";
       $instagram = "jalltzy_";
    ?>
    <button onclick="tampilkanKontak()">Kontak Saya</button>
<div id="ContactMe" style="display: none;">
    <p>Email: <?php echo $kontakEmail; ?></p>
    <p>Instagram: <?php echo $instagram; ?></p>
</div>

<script>
function tampilkanKontak() {
    var kontakDiv = document.getElementById("ContactMe");
    kontakDiv.style.display = "block";
}
</script>

</div>
</div>

<?php
 include_once 'bottom.php';
?>