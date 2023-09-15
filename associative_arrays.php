<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
    Student : <input type="text" name="student" id=""><br>
    <input type="submit" value="Submit">

    </form><br>


    <?php 
    $grades = array("Tom" => "A+", "Bubu" => "A++", "Dudu" => "A++");
    echo $grades[$_POST["student"]];

    ?>
</body>
</html>