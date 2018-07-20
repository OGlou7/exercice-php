
<?php
 if(isset($_GET["button"])){
   $nom = $_GET["nom"];
   $prenom = $_GET["prenom"];
   $prof = $_GET["prof"];
   $excuse = $_GET["excuse"];
   $genre = $_GET['genre'];
 }
//GENRE
  if ($genre == 'Fille') {
    $genre = 'elle';
  }
  else {
    $genre = 'il';
  }

//EXCUSES
  if ($excuse == "malade") {
    $text = " est tombé malade cette nuit. Le docteur prévoit une reprise des cours pour la fin de semaine.";
  }
  elseif ($excuse == "familiales") {
    $text = " a perdu un membre de sa famille.";
  }
  elseif ($excuse == "voyage") {
    $text =" est à l'étranger et reviendra ce lundi. ";
  }
  elseif ($excuse == "intoxication") {
    $text =" a eu un intoxication alimentaire. Le docteur prévoit une reprise des cours la semaine prochaine.";
  }
  elseif ($excuse == "extra-scolaire") {
    $text =" a un match SUPER important. ";
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Générateur D'Excuses </title>
  </head>
  <body>
    <form class="" action="" method="get">
      <h1>Formulaire d'absence</h1>
      Nom <br>
      <input type="text" name="nom" size="35" value=""><br>
      Prénom <br>
      <input type="text" name="prenom" size="35" value=""><br>
      <br>
      <input type="radio" name="genre" value="Fille">Fille
      <input type="radio" name="genre" value="Garçon">Garçon <br>
      <br>
      Nom du professeur <br>
      <input type="text" name="prof" size="35" value=""><br>
      <br>
      Raison de l'absence
      <label> <br>
        <input name="excuse" type="radio" value="malade">malade
      </label>
      <label>
        <input name="excuse" type="radio" value="familiales">familiales.
      </label>
      <label>
        <input name="excuse" type="radio" value="voyage">voyage
      </label>
      <label>
        <input name="excuse" type="radio" value="intoxication">intoxication
      </label>
      <label>
        <input name="excuse" type="radio" value="extra-scolaire">activité extra-scolaire
      </label><br>
      <button type="submit" name="button"> Envoyer</button>

      <h3>
      <p><?php echo $prof ?>,<br>
      Je vous prie d'excuser l'absence ce <?php echo date('d/m/y')?>. <br>
      En effet,<?= $_GET['nom'] ?> ne pourra pas être présent à l'école aujourd'hui car
      <?= $genre ?> <?= $text ?><br>
      Pour tout complément d’informations n’hésitez surtout pas à nous contacter.
      <br><br>
      Cordialement <br>
      Signature parentale.</p>
    </h3>
    </form>
  </body>
</html>
