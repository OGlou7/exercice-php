
<?php
  // ----- Majuscule Prenom ----- //
  function name($prenom) {
    return ucfirst($prenom);
  }
  echo name("emile");
  echo "<br />";
  // ----- l'année en cours ----- //
  echo date("Y");
  echo "<br>";
  // ----- la date et l'heure en cours ----- //
  echo date("d-M-Y h:m:s");
  echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fonctions PHP</title>
</head>
<body>
</body>
</html>
