<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url Parameter</title>
</head>
<body>
    <h1>URL PARAMETER</h1>

    <form action="url.php" method="get">
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>

    <br>
    <br>

    <?php echo $_GET["name"]; 
    ?>
</body>
</html>