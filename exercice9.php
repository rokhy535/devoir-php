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
    'ousmane' => array(
        'prenom' => 'ousmane',
        'ville' => 'Paris',
        'age' => 30
    ),
    'Bobou' => array(
        'prenom' => 'Bobou',
        'ville' => 'Lyon',
        'age' => 25
    ),
    'Charle' => array(
        'prenom' => 'Charle',
        'ville' => 'Marseille',
        'age' => 35
    )
);
echo "Prénom de ousmane : " . $personnes['ousmane']['prenom'] . "\n";
echo "Ville de Bobou : " . $personnes['Bobou']['ville'] . "\n";
echo "Âge de Charle : " . $personnes['Charle']['age'] . "\n";

?>
</body>
</html>