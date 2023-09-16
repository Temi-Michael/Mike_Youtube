<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $luckyNumbers = array(23, 32, 56, 21, 45, 26, 33, 78);
    for ($i=1; $i <= count($luckyNumbers); $i++) { 
        echo $luckyNumbers[$i]. "<br>";
    }
    
    
    ?>
</body>
</html>