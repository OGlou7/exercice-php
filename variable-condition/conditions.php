<?php
   /* Ex meteo */
   $temperature = 21;
   if ($temperature > 15) {
     $vetement_du_jour = "T-shirt";
   } else {
     $vetement_du_jour = "Pull-over";
   }
   echo $vetement_du_jour;
?>  <br><br>
<?php
   /* ----- Exercice 0 ----- */
   $chambre_est_sale = false;
   if ($chambre_est_sale == true) {
     $chambre_est_sale = "Range ta chambre, on dirait la cage d'un bonobo!";
   } else {
     $chambre_est_sale = "Ta chambre est trop propre, vis un peu!";
   }
   echo $chambre_est_sale;
 ?> <br><br>
<?php
   /* ----- Exercice 1 ----- */
   $time = 6;
   if ($time >= 5 AND $time <= 9) {
     $time = "Bonjour !";
   } elseif ($time > 9 AND $time <= 12) {
     $time = "Bonne journée !";
   } elseif ($time > 12 AND $time <= 16) {
     $time = "Bon après-midi !";
   } elseif ($time > 16 AND $time <= 21) {
     $time = "Bonne soirée !";
   } elseif ($time > 21 AND $time <5){
     $time = "Bonne nuit !";
   }
   echo $time;
 ?> <br><br>

 <!--- Exercice 2 => Message age     --->
 <!--- Exercice 3 => Message gender  --->
 <!--- Exercice 4 => Message langue --->
<?php
   extract($_GET);
     if (isset($age)) {
       if ($age < 12 AND $gender == "Male" AND $langue == "No") {
         $msg = "Salut petit!";
       } elseif ($age < 12 AND $gender == "Male" AND $langue == "Yes") {
         $msg = "Helo Boy !";
       } elseif ($age < 12 AND $gender == "Female" AND $langue == "No") {
         $msg = "Salut petite!";
       } elseif ($age < 12 AND $gender == "Female" AND $langue == "Yes") {
         $msg = "Hello Girl !";
       } elseif ($age >= 12 AND $age < 18 AND $gender == "Male" AND $langue == "No") {
         $msg = "Salut l'adolescent !";
       } elseif ($age >= 12 AND $age < 18 AND $gender == "Male" AND $langue == "Yes") {
         $msg = "Hello Teenage boy!";
       } elseif ($age >= 12 AND $age < 18 AND $gender == "Female" AND $langue == "No") {
         $msg = "Salut l'adolescente !";
       } elseif ($age >= 12 AND $age < 18 AND $gender == "Female" AND $langue == "Yes") {
         $msg = "Hello Teenage girl!";
       } elseif ($age >= 18 AND $age < 115 AND $gender == "Male" AND $langue == "No") {
         $msg = "Bonjour Monsieur!";
       } elseif ($age >= 18 AND $age < 115 AND $gender == "Male" AND $langue == "Yes") {
         $msg = "Hello Sir !";
       } elseif ($age >= 18 AND $age < 115 AND $gender == "Female" AND $langue == "No") {
         $msg = "Bonjour Madame!";
       } elseif ($age >= 18 AND $age < 115 AND $gender == "Female" AND $langue == "Yes") {
         $msg = "Hello Lady !";
       } elseif ($age >= 115 AND $gender == "Male" AND $langue == "No") {
         $msg = "Wow ! Toujours en vie papy ? ";
       } elseif ($age >= 115 AND $gender == "Male" AND $langue == "Yes") {
         $msg = "Wow ! Still alive, old man ?";
       } elseif ($age >= 115 AND $gender == "Female" AND $langue == "No") {
         $msg = "Wow ! Toujours en vie mamie ?>";
       } elseif ($age >= 115 AND $gender == "Female" AND $langue == "Yes") {
         $msg = "Wow ! Still alive, old lady ? ";
       }
       echo $msg;
     }
?> <br>

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
  <input type="number" name="age" value=""><br>
  "Homme ou Femme?"
  Homme :<input type="radio" name="gender" value="Male">
  Femme :<input type="radio" name="gender" value="Female"><br>
  "Parles-tu anglais?"
  oui :<input type="radio" name="langue" value="Yes">
  non :<input type="radio" name="langue" value="No">
  <button type="submit" value="Submit">OK</button>
</form>
</body>

</html>


<!--- Exercice 5 --->
  <?php
    $note = rand(0, 20);
    if ($note <= 3 ) {
      $message = "Ce travail est nul.";
    } elseif ($note > 3 AND $note <= 9) {
      $message = "Ce travail n'est pas terrible.";
    } elseif ($note == 10 ) {
      $message = "Tout juste la moyenne.";
    } elseif ($note > 10 AND $note <= 14) {
      $message = "C'est pas mal.";
    } elseif ($note > 14 AND $note <= 18) {
      $message = "Bravo ! ";
    } elseif ($note > 18 AND $note <= 20) {
      $message = "Tricheur !";
    }
    echo "$note/20 $message";
  ?>
