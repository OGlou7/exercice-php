    <!-- Ex famille -->
    <?php
      $family = ["Maman", "Papa", "Soeur", "Moi"];
      print_r($family);
      echo "<br />";
      echo "<br />";
      $plat = ["frite", "pizza", "hamburger"];
      print_r($plat);
      echo "<br />";
      echo "<br />";
      $series = ["Friends", "HTGAWM", "Scandal"];
      print_r($series[2]);
      echo "<br />";
    ?>
    <!--- Ex Tableaux associatifs       --->
    <!--- Ex Tableaux multi-dimensionnels --->
    <!--- Ex Manipuler des arrays: Compter --->
    <?php
    $papa = [
      "Nom" => "O",
      "Prénom" => "N",
      "Age" => 60,
      "Nombre de frere/soeur" => 5,
      "Hobbies" => ["Bricolage", "Jardinage"]
    ];
      $moi = [
        "Nom" => "OC",
        "Prénom" => "ML",
        "Age" => 25,
        "Nombre de frere/soeur" => 1,
        "Hobbies" => ["Cooking", "Netflix"],
        "papa" => $papa
      ];

      echo "<pre>";
      print_r($moi);
      echo "</pre>";
      $resultatPapa = count($papa["Hobbies"]);
      print_r("Papa a  $resultatPapa hobbies");
    ?> <br><br>
    <!--- Ex Manipuler des arrays : à partir de deux tableaux  --->
    <?php
      $web_development = [
        "frontend" => [],
        "backend" => [],
      ];
      array_push($web_development["frontend"], "xhtml", "css", "Javascript", "Flash");
      array_push($web_development["backend"], "Ruby on Rails", "Javascript");
      echo "<pre>";
      print_r($web_development);
      echo "</pre>";
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP</title>
  </head>
  <body>

  </body>
</html>
