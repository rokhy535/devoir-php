<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function sinus($angle, $unite = 'radian') {
    switch (strtolower($unite)) {
        case 'radian':
            return sin($angle);
        case 'degre':
            return sin(deg2rad($angle));
        case 'grade':
            return sin($angle * M_PI / 200);
        default:
            return null;
    }
}
?>
</body>
</html>