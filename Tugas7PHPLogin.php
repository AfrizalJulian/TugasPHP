<?php
  include_once 'top.php';
  include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <h1>Form Login</h1>
        <form method="post" action="Tugas7PHPLogin.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
// Fungsi untuk memeriksa login
function cekLogin($username, $password) {
    // Ganti kondisi ini dengan yang sesuai dengan kebutuhan Anda
    if ($username === 'Client' && $password === '12345678910') {
        return true;
    }
    return false;
}

// Proses form login jika ada pengiriman data POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (cekLogin($username, $password)) {
        // Jika login berhasil, arahkan ke halaman admin.php
        header("Location: Tugas7PHPAbout.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "Username atau password salah.";
    }
}
?>
</div>
</div>

<?php
 include_once 'bottom.php';
?>