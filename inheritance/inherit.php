<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    class Chef {
        function makeChicken () {
            echo "The chef is making Chicken";
        }

        function makeSalad () {
            echo "The chef can make salad";
        }

        function makeSpecialDish () {
            echo "This chef makes BBQ Sandwich";
        }
    }

    class ItalianChef extends Chef {
        function makePasta () {
            echo "The chef is making Pasta";
        }

        function makeSpecialDish () {
            echo "The chef is making a Candy d'fleur";
        }
    }

    $chef1 = new Chef;
    echo $chef1 -> makeChicken(). "<br>";

    $ItalianChef1 = new ItalianChef;
    echo $ItalianChef1 -> makeSalad(). "<br>";

    $ItalianChef2 = new ItalianChef;
    echo $ItalianChef2 -> makeSpecialDish();
    
    
    
    ?>
</body>
</html>