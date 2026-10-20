<?php
if (!session_id()) session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='index.php';</script>";
    exit;
}
?>
Selamat datang <strong><?php echo $_SESSION['username']; ?></strong> <a href="?module=logout#pos">Keluar</a>