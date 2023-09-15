<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
    $friends = array("Loki", "Bubu", "Temi", "Lazy_Coder", 2, 4);
    echo $friends[3]. "<br>";

    $change = array("Mike", "Loki", "Bear", "Last");
    $change[2] = "Sanmi";
    echo $change[2]. "<br>";

    $adding = array(2, 3, 5, 9, 4);
    $adding[5] = "All";
    echo $adding[5]. "<br>";

    $find = array("Num", "Skull", "How", "Total", "Find");
    echo count($find). "<br>";

?>
</body>
</html>