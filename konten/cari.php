<h2>Cari Data Member</h2><br />

<form action="index.php" method="GET">
    <input type="hidden" name="module" value="cari" />
    <label>Cari Nama / Username:</label>
    <input type="text" name="keyword" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>" />
    <input type="submit" value="Cari" />
</form>
<br />

<?php
include "koneksi/koneksi.php";
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
if ($keyword != '') {
    echo "<h3>Hasil Pencarian untuk: '$keyword'</h3><br />";
    $select = "SELECT * FROM register WHERE username LIKE '%$keyword%' OR namadep LIKE '%$keyword%' OR namabel LIKE '%$keyword%'";
} else {
    $select = "SELECT * FROM register";
}
$hasil = mysql_query($select);
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