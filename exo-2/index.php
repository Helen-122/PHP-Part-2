<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
<h2>Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100. <br>
Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.</h2>
<?php


 $i = 0;
 $j = rand(1,100);

while ($i <=19) {
    echo $i * $j;
    var_dump($i, $j);
    $i++; 
    // il faut refaire repartir le random sinon il n'est pas renouvelé
    $j = rand(1,100);
}

?>
</body>
</html>