<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class & object</title>
</head>
<body>
    <h1>Class and object in php</h1>

    <?php 
    class Book{
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;
    $book1->title = "Harry potter";
    $book1-> author = "Jk Rawling";
    $book1-> pages = 500;
    echo $book1->title;
    echo "<hr>";
    echo $book1->author;
    
    
    ?>
</body>
</html>