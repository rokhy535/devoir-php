<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      Entrer le rayon  <input type="text" name="rayon">
      <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $rayon=$_POST['rayon'];
        $diametre=$rayon*2;
        echo"Le diametre est:$diametre";
        define("pi" ,3.14);
        $perimetre=$diametre*pi;
        echo"Le perimetre est:$perimetre"; 
        $surface=pi*$rayon*$rayon ;
        echo"La surface est:$surface";

      }
    ?>
</body>
</html>