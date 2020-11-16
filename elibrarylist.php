<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Library List Book</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bglight">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand">E-Library Jember</a>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="elibraryhome.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="elibrarylist.php">List Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="elibrarycategory.php">Kategori Buku</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-light" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>