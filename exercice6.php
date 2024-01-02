<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"name="number">
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['number'])){
        $number=$_POST['number'];
        function afficherDiviseurs($number) {
            echo "Les diviseurs de $number sont : ";
            
            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i == 0) {
                    echo $i . " ";
                }
            }
        }
    }

    ?>
</body>
</html>