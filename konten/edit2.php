<?php
include "koneksi/koneksi.php";
if (isset($_POST['id'])) {
    $edit = "UPDATE register SET namadep='$_POST[namadep]', namabel='$_POST[namabel]', username='$_POST[username]', password='$_POST[password]', usia='$_POST[usia]', jk='$_POST[jk]', ttl='$_POST[ttl]', email='$_POST[email]', notel='$_POST[notel]' WHERE id='$_POST[id]'";
    if (mysql_query($edit)) {
        echo "<script>alert('data berhasil diedit'); window.location.href='?module=lihat';</script>";
    }
}
?>