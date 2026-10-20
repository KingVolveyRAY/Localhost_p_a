<?php
include "koneksi/koneksi.php";
if (mysql_query("DELETE FROM register WHERE id='$_GET[id]'")) {
    echo "<script>alert('data berhasil di hapus'); window.location.href='?module=lihat';</script>";
}
?>