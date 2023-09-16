<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
    What is your grade? <input type="text" name="grade" id=""> <br>
    <input type="submit" value="Submit">



    </form> <br>


    <?php 
    
    $grade = $_POST["grade"];
    switch ($grade) {
        case 'A':
            echo "You did great!";
            break;
        case 'B':
            echo "You did pretty good!";
            break;
        case 'C':
            echo "Fair Enough";
            break;
        case 'D':
            echo "You did poorly";
            break;
        case 'F':
            echo strtoupper("you failed!!");
            break;
        default:
            echo "Enter a valid grade";
            break;
    }

    ?>
</body>
</html>