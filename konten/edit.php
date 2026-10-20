<h2>Edit Data</h2><br />
<?php
include "koneksi/koneksi.php";
$hasil = mysql_query("SELECT * FROM register WHERE id='$_GET[id]'");
$b = mysql_fetch_array($hasil);
?>
<form action="?module=edit2" method="post">
<input type="hidden" name="id" value="<?php echo $b['id']; ?>" />
<table border="0">
    <tr><td>nama depan</td><td><input type="text" name="namadep" value="<?php echo $b['namadep']; ?>" /></td></tr>
    <tr><td>nama belakang</td><td><input type="text" name="namabel" value="<?php echo $b['namabel']; ?>" /></td></tr>
    <tr><td>username</td><td><input type="text" name="username" value="<?php echo $b['username']; ?>" /></td></tr>
    <tr><td>password</td><td><input type="password" name="password" value="<?php echo $b['password']; ?>" /></td></tr>
    <tr><td>usia</td><td><input type="text" name="usia" value="<?php echo $b['usia']; ?>" /></td></tr>
    <tr><td>jenis kelamin</td><td><input type="text" name="jk" value="<?php echo $b['jk']; ?>" /></td></tr>
    <tr><td>tempat tanggal lahir</td><td><input type="text" name="ttl" value="<?php echo $b['ttl']; ?>" /></td></tr>
    <tr><td>email</td><td><input type="text" name="email" value="<?php echo $b['email']; ?>" /></td></tr>
    <tr><td>no telp</td><td><input type="text" name="notel" value="<?php echo $b['notel']; ?>" /></td></tr>
    <tr><td align="right"><input type="reset" value="reset" /></td><td><input type="submit" value="submit" /></td></tr>
</table>
</form>
<?php mysql_close(); ?>