<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php method</title>
</head>
<body>
    <h1>PHP method</h1>

    
    <form action="method.php" method="post">
        Password: <input type="password" name="password"><br><br>
        <input type="submit">
    </form>

<br>
    <?php echo $_POST["password"];
    // get method is not secure this method shown in url so its nots secure
    //http://localhost/codecamp%20php/method.php?password=545534343 exm

    // post method is more secure we cant see password in url 
    // exm  http://localhost/codecamp%20php/method.php 
  ?>
</body>
</html>