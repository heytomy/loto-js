<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur grille loto</title>
</head>
<body>

<form method="post">
  <input type="submit" name="generate_numbers" value="Générer les numéros">
</form>

<?php

if (isset($_POST["generate_numbers"])) {
    // générer les numéros de loto
    // ... code de génération des numéros de loto ...
  } else {
    // afficher le formulaire HTML
    echo (die);
  }  

$numBalls = 5; // nombre de boules à tirer
$maxNumber = 49; // nombre maximum de boules disponibles
$drawnBalls = array(); // tableau pour stocker les boules tirées

for ($i = 0; $i < $numBalls; $i++) {
    $drawnBall = rand(1, $maxNumber);
    while (in_array($drawnBall, $drawnBalls)) {
        $drawnBall = rand(1, $maxNumber);
    }
    $drawnBalls[] = $drawnBall;
}

sort($drawnBalls);
echo "Les boules tirées sont : " . implode(", ", $drawnBalls);

?>

</body>
</html>