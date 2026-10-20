<?php if (!session_id()) session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>mywebsite</title>
    <link href="style/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>PERTEMUAN I -- SISTEM PAKAR</h1>
        </div>

        <div id="sidebar">
            <h3>navigasi</h3>
            <ul id="navmenu">
                <li><a href="index.php">profil</a></li>
                <li><a href="?module=galeri#pos">galeri</a></li>
                <li><a href="?module=jadwal">jadwal kuliah</a></li>
                <li><a href="?module=daftarregister#pos">Register</a></li>
                <li><a href="?module=lihat#pos">Lihat Data</a></li>
                <li><a href="?module=cari#pos">Cari Data</a></li>
            </ul>

            <div id="login">
                <?php if (isset($_SESSION['username'])) { ?>
                    <p>Halo, <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <a href="?module=logout#pos">[ Keluar ]</a>
                <?php } else { ?>
                    <form action="?module=loginproc#pos" method="post">
                        Username <input type="text" name="username" />
                        Password <input type="password" name="password" />
                        <input type="submit" value="Login" />
                    </form>
                <?php } ?>
            </div>
        </div>

        <div id="page">
            <?php 
            $module = isset($_GET['module']) ? $_GET['module'] : 'home';
            include "konten/$module.php"; 
            ?>
        </div>

        <div id="clear"></div>

        <div id="footer">
            <p>&copy; 2010</p>
        </div>
    </div>
</body>
</html>
