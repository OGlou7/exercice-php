
<?php
 if(isset($_POST["button"])){
   @$nom = $_POST["nom"];
   @$prenom = $_POST["prenom"];
   @$prof = $_POST["prof"];
   @$excuse = $_POST["excuse"];
   @$genre = $_POST['genre'];
 }
                // @ BEFORE VAR is to hide the Notice in HTML
//GENRE
 if (@$genre == 'Fille') {
    $genre = 'elle';
  }
  else {
    $genre = 'il';
  }

//EXCUSES

  if (@$excuse == "malade") {
    $text = " est tombé malade cette nuit. <br /> Le docteur prévoit une reprise des cours pour la fin de semaine.";
  }
  elseif (@$excuse == "familiale") {
    $text = " a perdu un membre de sa famille.";
  }
  elseif (@$excuse == "voyage") {
    $text =" est à l'étranger et reviendra ce lundi. ";
  }
  elseif (@$excuse == "intoxication") {
    $text =" a eu un intoxication alimentaire. <br /> Le docteur prévoit une reprise des cours la semaine prochaine.";
  }
  elseif (@$excuse == "extra-scolaire") {
    $text =" a un match SUPER important. ";
  }

//SANITIZE ALL
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title> Générateur d'Excuses </title>
  </head>
  <body>
    <form class="" action="" method="post">
      <h1>Générateur d'Excuses</h1>
      <strong>Nom</strong><br>
      <input type="text" name="nom" size="35" value="" placeholder="Nom de l'enfant..."><br><br>
      <strong>Prénom</strong><br>
      <input type="text" name="prenom" size="35" value="" placeholder="Prénom de l'enfant..."><br>
      <br>
      <input type="radio" name="genre" value="Fille">Fille &nbsp
      <input type="radio" name="genre" value="Garçon">Garçon <br>
      <br>
      <strong>Nom du professeur</strong><br>
      <input type="text" name="prof" size="35" value="" placeholder="Nom du professeur..."><br>
      <br>
      <strong>Raison de l'absence </strong><br>
      <label> <br>
        <input name="excuse" type="radio" value="malade">malade &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="familiale">familiale &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="voyage">voyage &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="intoxication">intoxication &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="extra-scolaire">activité extra-scolaire &nbsp
      </label><br><br>
      <button type="submit" name="button"> Envoyer</button> <br><br>

      <section>
      <h3>
      <p><?php echo @$prof ?>,<br>
      Je vous prie d'excuser l'absence ce <?php echo date('l d/m/y')?>. <br>
      En effet, notre enfant <?= @$_POST['prenom'] ?> <?= @$_POST['nom'] ?> ne pourra pas être présent à l'école aujourd'hui car
      <?= $genre ?> <?= @$text ?><br>
      Pour tout complément d’informations n’hésitez surtout pas à nous contacter.
      <br><br>
      Cordialement,<br><br>
      Signature parentale.</p><br>
      </h3>
      </section>
    </form>

  </body>
</html>
