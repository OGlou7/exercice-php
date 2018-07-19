<!-- Ex pronoms personnels -->
<?php
  $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
  foreach ($pronoms_personnels as $key => $value) {
    echo $value;
    if ($value == "Je") {
      $conjug = " code <br>";
    } elseif ($value == "Tu") {
      $conjug = " codes <br>";
    } elseif ($value == "Il/Elle") {
      $conjug = " code <br>";
    } elseif ($value == "Nous") {
      $conjug = " codons <br>";
    } elseif ($value == "Vous") {
      $conjug = " codez <br>";
    } elseif ($value == "Elles/Ils") {
      $conjug = " codent <br>";
    };
    echo $conjug;
    echo "<br>";
  };
?>

<!-- Exercice While -->
<?php
  echo "WHILE";
    echo "<br />";
  $ligne = 1;
  while ($ligne <= 120) {
    echo $ligne;
    echo "<br />";
    $ligne++;
  }
 ?>
 <br>

  <!-- Exercice For  -->
<?php
 echo "FOR";
  for ($ligne = 1; $ligne < 121 ; $ligne++) {
    echo "<br />";
    echo $ligne;
  }
    echo "<br />";
  $classe = ["A","B","C","D","E","F","H","I","J", "K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
  for ($prenom = 0; $prenom < count($classe); $prenom++) {
    echo "Son prénom est ".$classe[$prenom];
    echo "<br />";
  }
?> <br>

<!-- Exercice pays -->
<?php
$pays = ["Belgique","Itale", "Espagne","Mexique", "Japon", "Chine", "Australie", "Angleterre", "Suisse","Philippines"];




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boucle PHP</title>
</head>
<body>

</body>
</html>
