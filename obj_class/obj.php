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
    $book3 = new Book("Despicable Me", "Sony Pictures", 300);
    $book4 = new Book("Frozen", "Waltz Disney", 500);
    $book5 = new Book("Star Wars", "Warner Bros", 2500);


    echo $book1 -> title. "<br>";
    echo $book2 -> author. "<br>";
    echo $book3 -> pages. "<br>";
    echo $book4 -> title. "<br>";
    echo $book5 -> pages. "<br>";
    
    ?>


</body>
</html>