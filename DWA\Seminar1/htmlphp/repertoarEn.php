<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,800&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-xs-12"><h1 class="logo"><a href="indexEn.html">Aktus Theatre</a></h1></div>
				<div class="col-md-6 col-xs-12">
					<nav class="main-navigation">
						<ul>
							<li><a href="rasporedEn.html">Schedule</a></li>
							<li><a href="repertoarEn.php" style="color:#C1A4AF">Shows</a></li>
							<li><a href="repertoar.php">HR</a></li>
							<li><a href="repertoarEn.php">EN</a></li>	
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header> 

	<section class="introRep"></section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-12 title"><h1>Shows</h1></div>
			
			<?php 
				$dbc = mysqli_connect('localhost', 'root', 'root', 'kazaliste') or die('Error!');
				mysqli_set_charset($dbc, 'utf8');
				$query = "SELECT * FROM Predstava_en";
				$result = mysqli_query($dbc, $query);
				while($row = mysqli_fetch_array($result)) {
					echo '<div class="col-xs-12 col-md-4 box imgInfo"><a href="predstavaInfoEn.php?id=' . $row['id'] . '"><h3>'.$row['naslov'].'</h3><img src="../images/'.$row['slika'].'" ></a>
					</div>';
				}

				mysqli_close($dbc);
			?>
		</div>
	</div>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4 box"></div>
				<div class="col-xs-12 col-md-4 box"></div>
				<div class="col-xs-12 col-md-4 box"></div>
			</div>
		</div>
	</footer>

</body>
</html>
