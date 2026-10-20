<?php
if (!session_id()) session_start();
include "koneksi/koneksi.php";

$login = mysql_query("SELECT * FROM user WHERE username='$_POST[username]' AND password='$_POST[password]'");
if (mysql_num_rows($login) == 1) {
    $_SESSION['username'] = $_POST['username'];
    echo "<script>alert('Anda berhasil masuk'); window.location.href='?module=indexuser#pos';</script>";
} else {
    echo "<script>alert('Anda gagal masuk'); window.location.href='?module=kontak#pos';</script>";
}
?>
