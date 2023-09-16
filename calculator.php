<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="calculator.php" method="post">

    <label for="num1">First Number :</label><input type="number" step="0.0000000001" name="num1" id="num1"> <br>
    <label for="op">OP : </label><input type="text" name="op" id="op"> <br>
    <label for="num2">Second Number : </label><input type="number" step="0.0000000001" name="num2" id="num2"> <br>

    <input type="submit" value="Submit">
    </form><br>
    <?php 
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
        echo $num1 + $num2;
    } else if ($op == "-") {
        echo $num1 - $num2;
    } else if ($op == "*") {
        echo $num1 * $num2;
    } else if ($op == "/") {
        echo $num1 / $num2;
    } else {
        echo "Invalid Operator";
    }
    
    
    
    
    ?>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <label for="num1">First Number:</label>
        <input type="number" name="num1" id="num1"><br>

        <label for="op">Operator:</label>
        <input type="text" name="op" id="op"><br>

        <label for="num2">Second Number:</label>
        <input type="number" name="num2" id="num2"><br>

        <input type="submit" value="Submit">
    </form><br>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["op"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($op) {
                    case "+":
                        echo "Result: " . ($num1 + $num2);
                        break;
                    case "-":
                        echo "Result: " . ($num1 - $num2);
                        break;
                    case "*":
                        echo "Result: " . ($num1 * $num2);
                        break;
                    case "/":
                        if ($num2 != 0) {
                            echo "Result: " . ($num1 / $num2);
                        } else {
                            echo "Division by zero is not allowed.";
                        }
                        break;
                    default:
                        echo "Invalid Operator";
                }
            } else {
                echo "Invalid input. Please enter valid numbers.";
            }
        } else {
            echo "Form fields are not set. Please submit the form.";
        }
    }
    ?> -->
</body>
</html>
