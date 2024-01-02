<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$personnes = array(
    'Ali' => array(
        'prenom' => 'Ali',
        'ville' => 'Paris',
        'age' => 30
    ),
    'kya' => array(
        'prenom' => 'kya',
        'ville' => 'Lyon',
        'age' => 25
    ),
    'Charle' => array(
        'prenom' => 'Charle',
        'ville' => 'Marseille',
        'age' => 35
    )
);
echo "Prénom de Alice : " . $personnes['Ali']['prenom'] . "\n";
echo "Ville de Bob : " . $personnes['kya']['ville'] . "\n";
echo "Âge de Charlie : " . $personnes['Charle']['age'] . "\n";

?>
</body>
</html>