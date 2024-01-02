<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
foreach ($personnes as $nom => $infos) {
    echo "Nom : $nom\n";
    echo "Prénom : " . $infos['prenom'] . "\n";
    echo "Ville : " . $infos['ville'] . "\n";
    echo "Âge : " . $infos['age'] . "\n";
    echo "\n";
}
?>
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
foreach ($personnes as $nom => $infos) {
    echo "Nom : $nom\n";
    echo "Prénom : " . $infos['prenom'] . "\n";
    echo "Ville : " . $infos['ville'] . "\n";
    echo "Âge : " . $infos['age'] . "\n";
    echo "\n";
}
?>
</body>
</html>
</body>
</html>