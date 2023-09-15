<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="checkboxes.php" method="post">

Apples : <input type="checkbox" name="fruits[]" value="apples" id=""> <br>
Mangoes : <input type="checkbox" name="fruits[]" value="mangoes" id=""> <br>
Apricot : <input type="checkbox" name="fruits[]" value="apricot" id=""> <br>
Oranges : <input type="checkbox" name="fruits[]" value="oranges" id=""> <br>
Grapes : <input type="checkbox" name="fruits[]" value="grapes" id=""> <br>
Strawberries : <input type="checkbox" name="fruits[]" value="strawberries" id=""> <br>

<input type="submit" value="Submit">
</form><br>

    <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[0]. "<br>";
    

    ?>
</body>
</html>