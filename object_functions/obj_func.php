<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    class Student {
        var $name;
        var $major;
        var $cgpa;


        function __construct($name, $major, $cgpa){
            $this -> name = $name;
            $this -> major = $major;
            $this -> cgpa = $cgpa;
        }

        function hasHonors() {
            if($this -> cgpa >= 3.5) {
                return "True";
            }else {
                return "False";
            }
        }
    }

    $student1 = new Student ("Billy", "Social Politics", 3.0);
    $student2 = new Student ("Jack", "Sociology", 2.9);
    $student3 =  new Student ("Tom", "Accounting", 3.6);


    echo $student1 -> major. "<br>";
    echo $student1 -> hasHonors(). "<br>";
    echo $student2 -> hasHonors(). "<br>";
    echo $student3 -> hasHonors(). "<br>";
    
    
    ?>
</body>
</html>