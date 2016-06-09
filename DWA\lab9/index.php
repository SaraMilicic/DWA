<!DOCTYPE html>
<html>
  <head>
    <title>My App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="app.min.css">
    <style>
      /* TODO */
    </style>
  </head>

  <body>
    <div class="app-page" data-page="home">
      <div class="app-topbar">
        <div class="app-title">Lista proizvoda</div>
      </div>
      <div class="app-content">
        
        <div class="app-section">
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
          <div class="app-button" data-target="page2">Go to Page 2</div>
        </div>
      </div>
    </div>

    <div class="app-page" data-page="page2">
      <div class="app-topbar">
        <div class="app-button left" data-back data-autotitle></div>
        <div class="app-title">Page 2</div>
      </div>
      <div class="app-content">
        Page 2 is lonely
        <ul class="app-list">
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
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
        </ul>
      </div>
    </div>

    <script src="zepto.js"></script>
    <script src="app.min.js"></script>
    <script>
      App.controller('home', function (page) {
        // put stuff here
      });

      App.controller('page2', function (page) {
        // put stuff here
      });

      try {
        App.restore();
      } catch (err) {
        App.load('home');
      }
    </script>
  </body>
</html>
