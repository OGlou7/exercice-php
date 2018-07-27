
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
    $text =" a eu une intoxication alimentaire. <br /> Le docteur prévoit une reprise des cours la semaine prochaine.";
  }
  elseif (@$excuse == "extra-scolaire") {
    $text =" a un match SUPER important. ";
  }

//>>>SANITIZE ALL<<<<
  // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//>>>>VALIDATION<<<<<
// // define variables and set to empty values
// $nom_error = $prenom_error = $prof_error  = "";
// $nom = $prenom = $prof = "";
//
// if ($_SERVER["REQUEST_METHOD"] == "POST") {              <<<EXECUTION>>
//   if (empty($_POST["nom"])) {
//     $nom_error = "Veuillez introduire votre nom";
//   } else {
//     $nom = test_input($_POST["nom"]);
//   }
//   if (empty($_POST["prenom"])) {
//     $prenom_error = "Veuillez introduire votre prénom";
//   } else {
//     $prenom = test_input($_POST["prenom"]);
//   }
//   if (empty($_POST["prof"])) {
//     $prof_error = "Veuillez introduire le nom du professeur";
//   } else {
//     $prof = test_input($_POST["prof"]);
//   }
// }

//>>>READ FICHIER.TXT <<<
//   $monfichier = file_get_contents('fichier.txt');
//   // var_dump($monfichier);
//   echo $monfichier;
//
// $monfichier .= >>>>>>>>>ADD TEXT<<<<<<<<<<<<<
// $add = "test add";
// file_put_contents("fichier.txt",$monfichier); <<<<<REPLACE FICHIER>>>>>>>
// OU
// file_put_contents("fichier.txt",$add, FILE_APPEND); <<<<<<< ADD in fichier>>>>
//
// fclose($monfichier);

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
      <input type="text" name="nom" size="35" value="" placeholder="Nom de l'enfant...">
      <!-- <?php echo $nom_error;?> -->
      <br><br>
      <strong>Prénom</strong><br>
      <input type="text" name="prenom" size="35" value="" placeholder="Prénom de l'enfant...">
      <!-- <?php echo $prenom_error;?> -->
      <br><br>
      <input type="radio" name="genre" value="Fille">Fille &nbsp
      <input type="radio" name="genre" value="Garçon">Garçon <br>
      <br>
      <strong>Nom du professeur</strong><br>
      <input type="text" name="prof" size="35" value="" placeholder="Nom du professeur...">
      <!-- <?php echo $prof_error;?> -->
      <br><br>
      <strong>Raison de l'absence </strong><br>
      <label> <br>
        <input name="excuse" type="radio" value="malade">Malade &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="familiale">Familiale &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="voyage">Voyage &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="intoxication">Intoxication &nbsp
      </label>
      <label>
        <input name="excuse" type="radio" value="extra-scolaire">Activité extra-scolaire &nbsp
      </label><br><br>
      <button type="submit" name="button"> Envoyer</button> <br><br>

      <section>
      <h3>
      <p><?php echo @$prof ?>,<br><br>
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
