<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="using_post.php" method="post">
        Password : <input type="password" name="password" id=""> <br>
        <input type="submit" value="Submit">
    </form> <br>

    <?php 
        echo $_POST["password"];
    ?>

</body>
</html>