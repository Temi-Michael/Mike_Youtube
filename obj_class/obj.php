<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php 
    
    class Book {
        var $title;
        var $author;
        var $pages;


        function __construct($aTitle, $aAuthor, $aPages) {
            $this -> title = $aTitle;
            $this -> author = $aAuthor;
            $this -> pages = $aPages;
        }
    }


    $book1 = new Book("Harry Porter", "J.K.Rowling", 400);

    $book2 = new Book("Lord Of The Rings", "Tolkien", 700);


    echo $book1 -> title. "<br>";
    echo $book2 -> author;

    
    ?>


</body>
</html>