<?php
echo"Ecriver un nombre";
if (isset($_POST['submit'])) {
    $number=$_POST['number'];
    if ($number % 3 == 0 && $nombre % 5 == 0) {
        echo "Le nombre $number est un multiple de 3 et de 5.";
    } else {
        echo "Le nombre $number n'est pas un multiple de 3 et de 5.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name="submit" value="valider">
    </form>
    
</body>
</html>