 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonus</title>
</head>
<body>
<h2>Créez une boucle qui affiche les nombres de 0 à 10.</h2>

<?php

 $mois = array('JANVIER','FEVRIER','MARS','AVRIL','MAI','JUIN','JUILLET','AOUT','SEPTEMBRE','OCTOBRE','NOVEMBRE','DECEMBRE');
for($i = 0; $i <= 11; $i++)
{
echo("<option value=\"$mois[$i]\"");
echo(">$mois[$i]</option>");
}

?>
</body>
</html>
 
 