<h2>Daftar Member</h2><br />
<?php
include "koneksi/koneksi.php";
$hasil = mysql_query("SELECT * FROM register");
?>
<table border="1">
    <tr>
        <th>id</th><th>nama depan</th><th>nama belakang</th><th>username</th><th>password</th>
        <th>usia</th><th>jk</th><th>ttl</th><th>email</th><th>notel</th><th colspan="2">aksi</th>
    </tr>
    <?php
    while ($b = mysql_fetch_array($hasil)) {
        echo "<tr>
            <td>$b[id]</td>
            <td>$b[namadep]</td>
            <td>$b[namabel]</td>
            <td>$b[username]</td>
            <td>$b[password]</td>
            <td>$b[usia]</td>
            <td>$b[jk]</td>
            <td>$b[ttl]</td>
            <td>$b[email]</td>
            <td>$b[notel]</td>
            <td><a href='?module=edit&id=$b[id]'>edit</a></td>
            <td><a href='?module=hapus&id=$b[id]'>hapus</a></td>
        </tr>";
    }
    mysql_close();
    ?>
</table>
<br />
<a href="index.php">&lt;-- kembali ke index</a>