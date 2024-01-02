<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulaire Adresse Client</h1>

<form action="traitement.php" method="post">
    <fieldset>
        <legend>Adresse client</legend>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br>

        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal" required pattern="[0-9]{5}"><br>
    </fieldset>

    <input type="submit" value="Envoyer">
</form>
<?php
    // Vérifier si les données du formulaire sont présentes
    if (isset($_POST['submit'])) {
        // Récupérer les données du formulaire
        $nom = ($_POST["nom"]);
        $prenom = ($_POST["prenom"]);
        $adresse = ($_POST["adresse"]);
        $ville = ($_POST["ville"]);
        $code_postal =($_POST["code_postal"]);

        // Afficher les données dans un tableau XHTML
        echo "<table border='1'>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$code_postal</td>
                </tr>
            </table>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>
</body>
</html>