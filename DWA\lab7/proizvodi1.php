<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Fantastic Beasts</title>
 
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/stil1.css" />
  
</head>

<body>
  <header class="site-header-logged">
    <div class="row">
      <div class="column column-4">
        <img src="img/fantBeastsLogo2.png">
      </div>

      <div class="column column-8">
        <div class="odjava">
        	<form method="post" action="login.html">
     
      	<input type="submit" name="login" value="Odjava">
  		</form>
      </div>
      </div> 

    </div>
  </header>
  
 
  <section class="body">
    <div class="row">
      <div class="column column-4">
      <nav class="main-navigation">
        <ul>
          <h2>IZBORNIK</h2>
          <li><a href="#osobni">Opcija 2</a></li>
          <li><a href="#skola">Opcija 3</a></li>
          <li><a href="#radno">Opcija 4</a></li>
          <li><a href="#znanje">Opcija 5</a></li>
        </ul>
      </nav>
    </div>

      <div class="sadrzaj column column-8"> 

        <input type= "text" id="search" name="search"> </input>
        <input type="submit" id="submit" value="Trazi" onclick="trazi()"></input>
        <a href="shoppingCart.php">SHOPPING CART</a>
         <input type="button" value="Obrisi cookie" onclick = "setCookie('shop','', 1)">
        <br>
        <?php
        if(!isset($_COOKIE["shop"])) {
            echo "Cookie named shop is not set!";
        } else {
            echo "Cookie shop is set!<br>";
            echo "Value is: " . $_COOKIE["shop"];
        }
?>
        <br><br>

      <table>
        <thead>
          <tr>
            <th>Ime proizvoda</th>
            <th>CIJENA</th>
          </tr>
        </thead>
        <tbody>
       <?php
        
        $dbc= mysqli_connect('localhost', 'root','root', 'fantastic') or die('Error connecting to MySQL.');
		mysqli_set_charset($dbc, 'utf8');
        $query= "SELECT id, opis, naziv, cijena from proizvod";

        $result= mysqli_query($dbc, $query) or die("Error quering database");


        while($row = mysqli_fetch_array($result)){
          echo '
                <tr>
                <td><div class="naziv"><b>' . $row['naziv'] . '</b> <br><br> ' . $row['opis']. '</div><br></td>
                <td><div class="cijena">' . $row['cijena'] . 'kn <br>' . '</div><br></td>
                <td> <input type="button" value="spremi" onclick = "setCookie(\'shop\',getCookie(\'shop\')+\',\'+'. $row[0] . ', 1)"></input></td> 
                </tr>
            ';
        }

      ?>
      </tbody>
    </table>
      


      </div>      
  </section> 
<br><br><br>

   <footer class="site-footer">
    <div class="row">
    <div class="column column-12"> <br>
      <p><b>&copy Copyright Fantastic Beats, 2016</b></p>
    </div>

    </div>
  </footer>

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


        function setCookie(cname, cvalue, exdays) {
          
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires="+d.toUTCString();
          document.cookie = cname + "=" + cvalue + "; " + expires;
		  window.alert("Cookie uspješno postavljen");
      }  

      function getCookie(cname) {
          var name = cname + "=";
          var ca = document.cookie.split(';');
          for(var i=0; i<ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1);
              if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
          }
          return "";
      }     
        </script>


</body>
</html>