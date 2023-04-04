<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $Radius = $_POST['Radius'];
  $Units = $_POST['Units'];
  $Pi = pi();
  $volume = (4/3 * $Pi) * ($Radius ** 3);
  $result = "The Volume of the Sphere is " . number_format($volume, 2) . " " . $Units . "<sup>3</sup>.";
} else {
  $result = "";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Volume of a Sphere Calculator</title>
    <link rel="stylesheet" href="./css/style.php">
    <link rel="icon" type="image/png" href="./images/favicon.webp">
  </head>
  <body>
    <div class="container">
      <h1>Volume of a Sphere Calculator</h1>
      <form id="circle-form" method="POST">
        <div class="form-group">
          <label for="Radius">Radius:</label>
          <input type="number" id="Radius" name="Radius" required>
        </div>
        <div class="form-group">
            <label for="Units">Units:</label>
            <input type="text" id="Units" name="Units" required>
          </div>
        <button type="submit" id="calculate-btn">Calculate</button>
      </form>
      <div class="image">
          <center><img src="images/circle.png"></center>
      </div>
      <div id="result"><?php echo $result; ?></div>
    </div>
    <script src="./js/script.js"></script>
    <script>
      const form = document.getElementById('circle-form');
      const resultDiv = document.getElementById('result');

      form.addEventListener('submit', function(event) {
        event.preventDefault();
        const Radius = parseFloat(document.getElementById('Radius').value);
        const Units = document.getElementById('Units').value;
        const Pi = Math.PI;
        const volume = (4/3 * Pi) * (Radius ** 3);
        resultDiv.innerHTML = `The Volume of the Sphere is ${volume.toFixed(2)} ${Units}<sup>3</sup>.`;
      });
    </script>
  </body>
</html>
