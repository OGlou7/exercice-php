
<?php
  // Majuscule Prenom
  function name($prenom) {
    return ucfirst($prenom);
  }
  echo name("emile");
  echo "<br />";

  // l'année en cours
  echo date("Y");
  echo "<br />";

  // la date et l'heure en cours
  echo date("d-M-Y h:m:s");
  echo "<br />";

  // 2 arguments
  function addition($value1, $value2) {
    echo $value1 + $value2;
  }
  echo addition(2, 7);
  echo "<br />";

  // Message erreur
  function addition2($value1, $value2) {
    if (is_int($value1) == true && is_int($value2) == true) {
      return $value1 + $value2;
    } else {
    return "Erreur, argument non numérique";
    }
  }
  echo addition2(11, "n");
  echo "<br />";

  // les initiales
  function init($wordinit) {
    $word = ucwords($wordinit);
    return preg_replace("/[^A-Z]/", "", $word);
  };
  echo init("In code we trust!");
  echo "<br />";

  //Remplace le a et e
  $word1 = "caecotrophie";
  $word2 = "chaenichthys";
  $word3 = "microsphaera";
  $word4 = "sphaerotheca";
  function æ($letter) {
    return str_replace("ae", "æ", $letter);
  }
  echo æ("$word1, $word2, $word3, $word4");
  echo "<br />";
  // fonction inverse ae
  function ae($letter) {
    return str_replace("æ", "ae", $letter);
  }
  echo ae(æ("$word1, $word2, $word3, $word4"));
  echo "<br />";

  // Message Alerte 2 Arguments
  $msgAlerte = "adresse email incorrecte !!!";
  $classAlerte = "warning";
  function feedback($msgAlerte, $classAlerte)
  {
    return "<div class=$classAlerte>$msgAlerte.</div>";
  }
  echo feedback($msgAlerte, $classAlerte);
  echo "<br />";
  // Messsage Alerte = "info"
  $msgAlerte2 = "Perfect !!!";
  $classAlerte2 = "attention";
  function feedback2($msgAlerte2, $classAlerte2 = "info")
  {
    return "<div class=$classAlerte2>$msgAlerte2.</div>";
  }
  echo feedback2($msgAlerte2);
  echo "<br />";

  // Générateur aléatoire 1 à 5 lettres
  function generateur() {
    $letter = "";
    for ($i=0; $i < 5; $i++) {
      $letter .= chr(rand(97,122));
    };
    return $letter;
  };
  echo generateur();
  echo "<br />";

  // Générateur aléatoire 7 à 15 lettres
  function generateur2() {
    $lettres2 = "";
    for ($ii=7; $ii < 15; $ii++) {
      $lettres2 .= chr(rand(97, 122));
    };
    return $lettres2;
  };
  echo generateur2();
  echo "<br />";
  ?>

  <?php
  function Minuscule($input){
    return mb_strtolower($input);
  };
  echo Minuscule("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
    echo "<br />";
  // Volume d'un cône
  function volume_un_cone() {
    $rayon = 5;
    $hauteur = 2;
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
    return $volume;
    }
    echo volume_un_cone();
    echo "<br />";
                  // Exercice #godmode
//reverse_string
function reverse_string($input){
   return strrev($input);
}
 echo reverse_string('Bonjour tout le monde');
   echo "<br />";
//les mouvements de jeunesse 
 function song() {
 $song = 'Buvons un coup ma serpette est perdue';
 $voyelle = array('a','e','i','o','u','y');
 $substitutions = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
 foreach ($substitutions as $key => $value) {
 $new_song = str_replace($voyelle, $value, $song);
 }
 return $new_song;
 }
 echo song();
 echo "<br />";
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

    <form action="Fonctions.php">
      <input type="submit" name="lettres2" value="Regénérer vos mots">
    </form>

  </body>
</html>
