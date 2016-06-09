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
  <?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: index.php');
?>
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