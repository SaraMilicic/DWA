<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<img src="vjezba2/fantBeastsLogo.png" style="width:100%;">
			</div>

			<div class="col-md-9 col-xs-12 logout">
				<form>
				<?php
					echo "Korisničko ime : ";
					if($_GET["username"] === "") echo "a is an empty string\n";
					echo $_GET['username'];
					echo"<br><br>";
					echo "Lozinka : ";
					if($_GET["password"] === "") echo "a is an empty string\n";
					echo $_GET['password'];
					echo"<br><br>";

				?>
				<input type="submit" value="Odjava">
				
				</form>
			</div>
		</div>


		<div class="row">
			<div class="col-md-3 col-xs-12 box">

				<nav class="main-nav">
					<ul>
						<li><a href="#">Izbornik</a></li>
						<li><a href="#">Opcija 2</a></li>
						<li><a href="#">Opcija 3</a></li>
						<li><a href="#">Opcija 4</a></li>
						<li><a href="#">Opcija 5</a></li>
					</ul>
				</nav>
			</div>

			<div class="col-md-9 col-xs-12 box content">
				<h3>Životopis</h3>
				<h4>Osobni podaci</h4>
				<p>Ime i prezima: Sara Miličić<br>Mjesto rođenja: Zagreb<br>Datum rođenja: 18.05.1994.</p>
				<h4>Podaci o školovanju</h4>
				<p>Osnovna škola: OŠ Dr.Ante Starčevića<br>Srednja škola: II.gimnazija Križanićeva<br>
					Fakultet: Tehičko veleučilište u Zagrebu</p>
				<h4>Znanja i vještine</h4><p>Java, Html, CSS, Php, Sql, MySql</p>
			</div>
		</div>
	</div>

	<footer>Copyright fantastic beasts, 2016</footer>


</body>

</html>
