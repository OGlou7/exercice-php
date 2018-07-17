
<!-- Exercice 0 -->
<!-- <?php
  $chambre_est_sale = "true";

  if ($chambre_est_sale == "true") {
  echo "Range ta chambre, on dirait la cage d'un bonobo!";
  }  else {
  echo "Ta chambre est trop propre, vis un peu!";
  }
?> -->

<!-- Exercice 1 -->
<!-- <?php
  $time = 10;

  if($time >= 5 AND $time <= 9 )
  {
      echo "Bonjours!";
  }
  elseif ($time >= 9.01 AND $time <= 12 )
  {
      echo "Bonne Journée!";
  }
  elseif ($time >= 12.01 AND $time <= 16 )
  {
      echo "Bon après-midi!";
  }
  elseif ($time >= 16.01 AND $time <= 21 )
  {
      echo "Bonne Soirée!";
  }
  else
   {
      echo "Bonne nuit!";
    }
?> -->
<!-- Exercices 2 -->
<?php
echo $_GET['age'];

  if ($_GET['age'] < 12) {
    echo "Salut petit!";
  }elseif ($_GET['age'] >= 12 AND $_GET['age'] < 18) {
    echo "Salut l'ado!";
  }elseif ($_GET['age'] >= 18 AND $_GET['age'] < 115 ) {
    echo "Salut l'adulte!";
  }else {
    echo "Wow! Toujours vivant?";
  }
?>
<!-- Exercice 3 -->
<?php
echo $_GET['gender'];

  if ($_GET['gender'] == female AND $_GET['age'] < 12) {
  echo "Salut petite!";
}elseif ($_GET['gender'] == female AND $_GET['age'] < 12 AND $_GET['age'] < 18) {
  echo "Salut l'adolescente!";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conditions</title>
</head>

<body>
<form action="conditions.php" method="get">
  "Quel est votre âge ?"
  <input type="number" name="age" value=""><br/>
  "Homme ou Femme?"
  Male :<input type="radio" name="gender" value="Male">
  Female :<input type="radio" name="gender" value="Female">
   <button type="submit" value="Submit">OK</button>
</form>
</body>

</html>
