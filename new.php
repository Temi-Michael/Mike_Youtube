<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="new.php" method="get">
Color : <input type = "text" name = "color"><br>
Flower : <input type = "text" name = "flower"><br>
Crush : <input type = "text" name = "crush"><br>
<input type="submit" value="Submit">
<br><br>

<?php 
$color = $_GET["color"];
$flower = $_GET["flower"];
$crush = $_GET["crush"];
echo "Roses are $color <br>";
echo "$flower are blue <br>";
echo "I love $crush";
?>
</form>
</body>
</html>