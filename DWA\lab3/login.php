<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<?php
		session_start();
		$_SESSION['username']  = 'admin';
		$_SESSION['password'] = 'admin';
	?>
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<a href="login.html"><img src="fantBeastsLogo.png" style="width:100%;"></a>
			</div>

			<div class="col-md-9 col-xs-12 logout">
				<form method="post" action="login.html">
				<?php

					if($_SESSION["username"]==$_POST["username"] && $_SESSION["password"]==$_POST["password"]){
						echo "Korisnik:".$_POST["username"]."</br>";
						echo "Lozinka:".$_POST["password"]."";
					}
					
					else {
						header("location:login.html");
						echo "Nemate admin prava";
					}
					

				?>
				<input type="submit" value="Odjava">
				
				</form>
			</div>
		</div>


		<div class="row">
			<div class="col-md-3 col-xs-12 box">

				<nav class="main-nav">
					
					<ul>
						<p>Izbornik</p>
						<li><a href="#osnovno">Osobni podaci</a></li>
						<li><a href="#skolovanje">Podaci o školovanju</a></li>
						<li><a href="#znanje">Znanja i vještine</a></li>
						<li><a href="#iskustvo">Radno iskustvo</a></li>
					</ul>
				</nav>
			</div>

			<div class="col-md-9 col-xs-12">
				
				<div>
				</div>
				
				<h3>Životopis</h3>

				<p  onclick="toggle_visibility('osobniPodaci')">
					<a name="osobniPodaci">Osobni podaci</a>
				</p>
				<div id ="osobniPodaci">
					Ime i prezima: Sara Miličić<br>Mjesto rođenja: Zagreb<br>Datum rođenja: 18.05.1994.<br><br>
				

					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel egestas mauris. Morbi quis massa id velit laoreet molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec quis massa quis odio suscipit rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis volutpat ante. Mauris elementum sed lectus nec tincidunt. Morbi sed imperdiet nulla. Aliquam luctus semper tempus. Vestibulum et leo sit amet sem viverra bibendum aliquam ut felis.

					Suspendisse placerat accumsan posuere. Aliquam sed magna vitae tortor semper dignissim. Sed et ante tincidunt, luctus magna non, porttitor est. In est diam, tempor quis suscipit et, suscipit in tortor. Nulla eu rhoncus mauris. Duis quis leo est. Integer in ex in nibh pharetra pulvinar. Donec eu faucibus nibh. Vivamus semper, eros vel sollicitudin sodales, libero ex pellentesque purus, in luctus dui metus id lectus. Proin dolor arcu, pulvinar in nisi eu, feugiat mattis neque. Pellentesque ut est mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque sed orci eget felis tempor tristique at in tortor.

					Aenean aliquam, risus ac porta mollis, nulla massa luctus ligula, vel euismod lacus eros quis ante. Etiam accumsan nibh ut scelerisque tempor. Integer tincidunt convallis lectus, eget dignissim sem tempor lobortis. Phasellus sit amet molestie nunc. Maecenas euismod felis non elit luctus, non ornare metus finibus. In aliquam magna lorem, vitae cursus odio vestibulum at. Quisque placerat, massa eget auctor semper, quam lorem imperdiet augue, non ultrices diam magna vitae ipsum. Integer blandit libero metus, nec volutpat erat rhoncus nec. Phasellus nunc diam, iaculis eu lacinia ut, mollis vitae justo.

					Morbi eu ligula dignissim, gravida nibh vel, imperdiet elit. Donec in augue hendrerit, molestie lectus at, efficitur neque. Suspendisse potenti. Integer lobortis dictum accumsan. Nullam eget ligula orci. Sed pellentesque ligula id dui porttitor, et scelerisque risus gravida. Donec eu rutrum quam.

					Sed dignissim, velit eu eleifend pulvinar, nisi arcu tristique tellus, ac finibus leo metus nec est. Aenean malesuada porttitor eros ac iaculis. Pellentesque finibus enim non neque porttitor, eu volutpat purus ullamcorper. Phasellus pharetra eros at nibh porttitor, vitae cursus lorem tincidunt. Aliquam a euismod magna. Donec maximus, felis et bibendum eleifend, turpis lectus ornare nulla, eget malesuada elit ligula ac quam. Duis tempus enim nec nisi dictum hendrerit. Praesent scelerisque ultricies bibendum. Ut at justo nec massa posuere tincidunt eu sed orci. Nullam sagittis nisi non metus condimentum dictum.
				</div><br><br>
				

				<p  onclick="toggle_visibility('skolovanje')">
					<a name="skolovanje">Podaci o školovanju</a>
				</p>
				<div id="skolovanje">Osnovna škola: OŠ Dr.Ante Starčevića<br>Srednja škola: II.gimnazija Križanićeva<br>
					Fakultet: Tehičko veleučilište u Zagrebu</div><br><br>
				

				<p  onclick="toggle_visibility('znanje')">
					<a name="znanje">Znanja i vještine</a>
				</p>
				<div id="znanje">Java, Html, CSS, Php, Sql, MySql</div><br><br>


				
				<p  onclick="toggle_visibility('iskustvo')">
					<a name="iskustvo">Radno iskustvo</a>
				</p>
				<div id="iskustvo">Webcamp Zagreb volonter</div><br><br>


				<a href="#" onclick="toggle_visibility('foo');">
					<p>Click here to toggle visibility of element #foo</p>
				</a>
				<div id="foo">This is foo</div>

			</div>
		</div>
	</div>

	<footer>Copyright fantastic beasts, 2016</footer>
	
	<script type="text/javascript">
	<!--
	    function toggle_visibility(id) {
	       var e = document.getElementById(id);
	       if(e.style.display == 'block')
	          e.style.display = 'none';
	       else
	          e.style.display = 'block';
	    }
	//-->
	</script>

</body>

</html>
