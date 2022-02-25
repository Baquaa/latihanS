<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP ONLINE</title>
    <link rel="stylesheet" type="text/css" href="../admin/src/style.css">
</head>
<body>
<?php
    session_start();

    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
?>

<header>
    <h1 class="judul">PEMBAYARAN SPP ONLINE SMK NEGERI 3 BANJARBARU</h1>
</header>

<div class="menu-a">
        <nav class="menu-b">
            <?php include "../items/menu.php";?>
        </nav>
    </div>

<div>
    <?php include "buka_file.php"; ?>
</div>

</body>
</html>