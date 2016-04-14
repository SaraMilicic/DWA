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
				<img src="fantBeastsLogo.png" style="width:100%;">
			</div>

			
		</div>


		<div class="row">
			
			<input type="text" id="search" name="search" placeholder="Upisi trazeni pojam">
			<input type="submit" id="submit" onclick="trazi()">
			<div class="col-md-12 col-xs-12 box content">
				<h3>Popis proizvoda</h3>

				<table>
			        <thead>
			          <tr>
			            <th>Ime proizvoda</th>
			            <th>CIJENA</th>
			          </tr>
			        </thead>
			    <tbody>
				<?php 
					$dbc = mysqli_connect('localhost', 'root', 'root', 'proizvodi') or die('Error!');

					$query = "SELECT naziv, cijena FROM Karakteristike";
					$result = mysqli_query($dbc, $query);

					/*echo '<tr>
						<th><div class="col-md-6 col-xs-6 naziv">Naziv proizvoda</div></th>
						<th><div class="col-md-6 col-xs-6 cijena">Cijena</div></th>
					</tr>';	*/				
					echo'<table>
			        <thead>
			          <tr>
			            <th><div class="col-md-6 col-xs-6 naziv">Ime proizvoda</div></th>
			            <th><div class="col-md-6 col-xs-6 cijena">CIJENA</div></th>
			          </tr>
			        </thead>
			    	<tbody>';
					while($row = mysqli_fetch_array($result)) {
						
						echo '<tr>
							<td><div class="col-md-6 col-xs-6 naziv">'.$row['naziv'].'</div></td>
							<td><div class="col-md-6 col-xs-6 cijena">'.$row['cijena'].'</br></div></td>
						</tr>';

					}

					echo '</tbody>
    				</table>';

					mysqli_close($dbc);
				?>
				</tbody>
    </table>
			
		</div>
	</div>

	<footer>Copyright fantastic beasts, 2016</footer>

	<script type="text/javascript"> 

          function trazi(){
            var unos = document.getElementById("search").value;
            var find= document.getElementsByTagName("TR");
            
            for(var i=1; i< find.length; i++){
              var c= find[i].innerHTML.search(unos);
              if(c == -1){
                find[i].style.display="none";
              }
            }
     
          }
          
    </script>


</body>

</html>
