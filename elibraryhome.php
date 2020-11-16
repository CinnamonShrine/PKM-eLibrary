<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Library Home</title>
	
	<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bglight">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand">E-Library Jember</a>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="elibrarylist.php">List Buku</a>
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

<div class="container mt-5">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
                <div class="card-body text-center">
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                </div>
            </div>
		</div>
		<div class="col-md-8">
			<div class="card mb-3">
				<div class="card-body text-center">
					<h4>Selamat datang di E-Library Jember <?php echo  $_SESSION["user"]["name"] ?> </h4>
					<p>Jika anda ingin mencari list dan kategori buku silahkan klik menu diatas. Atau jika anda tertarik bisa membaca buku yang baru saja kami upload dibawah ini</p>
				</div>
			</div>
	
			<!-- Buku baru -->
			<h3>Buku Terbaru</h3>
			<div class="row text-center">
				<div class="col-md-6 book-cover">
					<img src="img/bookcover/java_beginer.jpg" class="img-thumbnail">
					<p><b>Java for Absolute Beginners Learn to Program the Fundamentals the Java 9+ Way</b></p>
					<a href="ebook/Java for Absolute Beginners Learn to Program the Fundamentals the Java 9+ Way by Iuliana Cosmina (z-lib.org).pdf" class="btn btn-dark">Baca</a>
				</div>
				<div class="col-md-6 book-cover">
					<img src="img/bookcover/machine_learn_py.jpg" class="img-thumbnail">
					<p><b>Machine Learning Applications Using Python</b></p>
					<a href="ebook/Machine Learning Applications Using Python - Cases Studies from Healthcare, Retail, and Finance by Puneet Mathur (z-lib.org).pdf" class="btn btn-dark">Baca</a>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-6 book-cover">
					<img src="img/bookcover/three_musk.jpg" class="img-thumbnail">
					<p><b>The Three Musketeers</b></p>
					<a href="ebook/The Three Musketeers by Alexandre Dumas, pere, Richard Pevear (Translator, Introduction) (z-lib.org).pdf" class="btn btn-dark">Baca</a>
				</div>
				<div class="col-md-6 book-cover">
					<img src="img/bookcover/crusaders_last_battle.jpg" class="img-thumbnail">
					<p><b>Accursed Tower The Crusaders’ Last Battle for the Holy Land</b></p>
					<a href="ebook/Accursed Tower The Crusaders’ Last Battle for the Holy Land by Roger Crowley (z-lib.org).pdf" class="btn btn-dark">Baca</a>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-6 book-cover">
					<img src="img/bookcover/the_third_reich.jpg" class="img-thumbnail">
					<p><b>The Oxford Illustrated History of the Third Reich</b></p>
					<a href="ebook/The Oxford Illustrated History of the Third Reich by Robert Gellately (z-lib.org).pdf" class="btn btn-dark">Baca</a>
				</div>
				<div class="col-md-6 book-cover">
					<img src="img/bookcover/islamic_philosphy.jpg" class="img-thumbnail">
					<p><b>The Oxford Handbook of Islamic Philosophy</b></p>
					<a href="ebook/The Oxford Handbook of Islamic Philosophy by Khaled El-Rouayheb, Sabine Schmidtke (z-lib.org).pdf" class="btn btn-dark">Baca</a>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>