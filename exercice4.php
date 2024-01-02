<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      Premier nombre  <input type="text"name="nbr1">
      Deuxieme nombre <input type="text" name="nbr2">
      <input type="button" name="submit" value="submit">
    </form>
    <?php
       if(isset($_POST['submit'])){
        $nbr1=$_POST['nbr1'];
        $nbr2=$_POST['nbr2'];
        function PGDC($a, $b) {
          while ($b != 0) {
              $temp = $b;
              $b = $a % $b;
              $a = $temp;
          }
          return $a;
      }
        $PPMC=($nbr1*$nbr2)/$PGCD;
        echo"Le PPMC des deux nombre est:$PPMC";
       }
    ?>
</body>
</html>