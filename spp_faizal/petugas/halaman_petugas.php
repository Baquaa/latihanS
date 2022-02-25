<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP ONLINE</title>
    <link rel="stylesheet" href="src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- header -->
    <div class="top-text">
        <header>
            <?php include "../items/header.php"; ?>
        </header>
    </div>
    <!-- navbar -->
    <div class="#">
        <nav class="#">
            <?php include "../items/menu.php";?>
        </nav>
    </div>
    <!-- konten -->
    <div>
        <?php include "../items/information.php";?>
    </div>
    <!-- footer -->
    <footer>
        <div class="foot-a">
            <?php include "../items/footer.php";?>
        </div>
    </footer>
</body>
</html>