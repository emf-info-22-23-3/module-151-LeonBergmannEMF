<!doctype html>
<html>
<header>
  <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
</header>

<body>
  <div id="conteneur">
    <h1>Les équipes de National League</h1>
    <table border="1">
      <tr>
        <td>ID</td>
        <td>Club</td>
      </tr>
      <?php
      require('ctrl.php');
      $liste = getEquipes();
      
      for ($i = 0 ; $i < sizeof($liste) ; $i++)
      {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $liste[$i] . "</td>";
        echo "</tr>";
      }

      ?>
    </table>
  </div>
</body>

</html>