<!--- Exercice 6 --->
  <?php
    $note = rand(0, 20);
    switch ($note) {
      case 0:
      case 1:
      case 2:
      case 3:
        echo "$note/20 Ce travail est nul !";
        break;
      case 4:
      case 5:
      case 6:
      case 7:
      case 8:
      case 9:
        echo "$note/20 Ce travail n'est pas terrible !";
        break;
      case 10:
        echo "$note/20 Tout juste la moyenne !";
        break;
      case 11:
      case 12:
      case 13:
      case 14:
        echo "$note/20 C'est pas mal !";
        break;
      case 15:
      case 16:
      case 17:
      case 18:
        echo "$note/20 Bravo ! ";
        break;
      case 19:
      case 20:
        echo "$note/20 Tricheur !";
        break;
    }
  ?><br> <br>
<!--- Exercice 7  --->
<?php
extract($_GET);
if (isset($age)) {
  if ($age >= 21 AND $age <= 40 AND $sexe == "femme") {
  $msg = "Bonjour et bienvenue parmi nous !";
}
 else {
  $msg = "Désolé, vous ne remplissez pas les critères de sélection.";
}
echo $msg;
}
?>
<!--- Exercice 8 --->
<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conditions-switch</title>
</head>

<body>
  <form action="conditions-switch.php" method="get">
    Ton age : <input type="number" name="age"><br>
    Homme : <input type="radio" name="sexe" value="homme">
    Femme : <input type="radio" name="sexe" value="femme">
    <button type="submit" value="Submit">OK</button>
  </form>
</body>

</html>
