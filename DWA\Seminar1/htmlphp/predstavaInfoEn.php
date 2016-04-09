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
							<li><a href="repertoarEn.php">Shows</a></li>
						</ul>
					</nav>
				</div>
			</div>
	</header> 
	</div>
	
	<section class="introInfo"></section>

	<div class="container-fluid editTextStyle">
		<div class="row">

			<?php
				$id = $_GET['id'];
				$dbc = mysqli_connect('localhost', 'root', 'root', 'kazaliste') or die('Error!');
				mysqli_set_charset($dbc, 'utf8');
				$query = "SELECT * FROM Predstava_en where id = $id";
				$result = mysqli_query($dbc, $query);
			
				while($row = mysqli_fetch_array($result)) {
					echo '<div class="col-xs-12 col-md-12 title"><h1>'.nl2br($row['naslov']).'</h1></div>';
					echo '<div class="col-xs-12 col-md-4 box"><h2>Director and actors</h2><p>'.nl2br($row['postava']).'</p></div>';
					echo '<div class="col-xs-12 col-md-4 box"><h2>Content</h2><p>'.nl2br($row['sadrzaj']).'</p></div>';
					echo '<div class="col-xs-12 col-md-4 box imgInfo"><img src="../images/'.$row['slika'].'"></div>';
				}

				mysqli_close($dbc);
			?>

			<div class="col-xs-12 col-md-12 box "><a href="shows.php">Return to all shows</a></div>
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
