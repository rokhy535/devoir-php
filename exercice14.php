<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Agence Immobilière</h1>

<form action="traitement.php" method="post">
    <input type="submit" name="action" value="Vendre">
    <input type="submit" name="action" value="Acheter">
    <input type="submit" name="action" value="Louer">
</form>
<?php
    if (isset($_POST['action'])) {
        $choix = $_POST['action'];

        switch ($choix) {
            case 'Vendre':
                header("Location: vendre.php");
                break;
            case 'Acheter':
                header("Location: acheter.php");
                break;
            case 'Louer':
                header("Location: louer.php");
                break;
            default:
                echo "Choix invalide";
        }
    }
?>
</body>
</html>