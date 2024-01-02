
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){ 
        $number=$_POST['number'];
$number= rand(100, 999);
$nombre_tire = 0;
for ($tirage = 1; $tirage <= 1000; $tirage++) {
    $nombre_tire = rand(100, 999);
    if ($nombre_tire == $number) {
        echo "Number : $number\n";
        echo "Il a fallu $tirage tirages pour obtenir le number.\n";
        break;
    }
}
    }
    ?>
    <form action="" method="post">
      Veillez ecrir un nombre a trois chiffre  <input type="text" name="number" id="number">
      <input type="text" name="submit" value="submit">
    </form>
</body>
</html>