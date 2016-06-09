<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Fantastic Beasts</title>
 
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/stil1.css" />
  
  <?php 
        session_start();
        $_SESSION['username']= 'admin';
        $_SESSION['password']= 'admin';
        
  ?>
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
          <?php 
            
        if($_SESSION['username'] == $_POST['username'] && $_SESSION['password']==$_POST['password']){
          echo "Korisnik:".$_POST["username"]."</br>";
          echo "Lozinka:".$_POST["password"]."";
        }
        else{
          header("location:login.html");
        }
    
    
      ?>
     
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
          <li><a href="proizvodi1.php">PROIZVODI </a></li>
          <li><a href="#skola">Opcija 3</a></li>
          <li><a href="#radno">Opcija 4</a></li>
          <li><a href="#znanje">Opcija 5</a></li>
        </ul>
      </nav>
    </div>

      <div class="sadrzaj column column-8"> 
       
        <h2><a name="osobni">Osobni podaci</a></h2>
        <p>Sara Miličić</p>
          <p> Zagreb (Hrvatska) </p>   

          <p> sara.konjevic@gmail.com  </p>

          <p> Datum rođenja 18.05.1994 </p>
          <p> Državljanstvo hrvatsko </p>
          <p> Mjesto rođenja: Zagreb, Hrvatska</p>
        </p>
        <br>
        <h2><a name="skola">Podaci o školovanju </a></h2>
        <p>
          </b> Stručnik prvostupnik inženjer računarstva razina 6 EKO-a
          Tehničko Veleučilište u Zagrebu, Zagreb (Hrvatska) </p>
      
      <p>
      
        II. gimnazija
      

        </p>

      <p>
        OŠ Ante Starčevića
      </p>

        <br><br>

        <h2><a name="radno">Podaci o radnom iskustvu</a> </h2>
        <p>
          Webcamp Zagreb volonter
        </p>
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
</body>
</html>