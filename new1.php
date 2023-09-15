<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new1.php" method="get">
        Name : <input type="text" name="name" id=""> <br>
        <input type="submit" value="Submit">

        <?php 
            echo $_GET["name"];
        ?>
    </form>
</body>
</html>