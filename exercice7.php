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
        $number=$_POST['number']
        function($nombre) {
            $sommeDiviseurs = 0;
        for ($i = 1; $i <= $nombre / 2; $i++) {
            if ($nombre % $i == 0) {
                $sommeDiviseurs += $i;
                if($number=$sommeDiviseurs){
                    echo"$number est parfait";
                }else{ 
                    echo"$number est imparfait";
                }
            }
        }
    }

    return $sommeDiviseurs == $nombre;
}
    ?>
</body>
</html>