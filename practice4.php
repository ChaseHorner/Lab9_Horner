<html>
<head>
  <style>
    table, th, td {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <?php
    $size = $_POST["size"];

    echo "<table>";

    for ($i = 0; $i <= $size; $i++) {
      echo "<tr>";

      for ($j = 0; $j <= $size; $j++) {
        if ($i == 0 && $j == 0) {
          echo "<td></td>";
        } elseif ($i == 0) {
          echo "<td>$j</td>";
        } elseif ($j == 0) {
          echo "<td>$i</td>";
        } else {
          echo "<td>" . ($i * $j) . "</td>";
        }
      }

      echo "</tr>";
    }

    echo "</table>";
  ?>
</body>
</html>
