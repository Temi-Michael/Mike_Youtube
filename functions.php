<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="post">
        
    </form><br>

    <?php 
        function sayHi($name, $age) {
            echo "Hello $name and you are $age". "<br>";
        }
    
        sayHi("Bubu", 25);
        sayHi("Dudu", 30);
        sayHi("Tom", 23);



    ?>
</body>
</html>