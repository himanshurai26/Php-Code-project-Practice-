<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    Name: <input type="text" name="fname">
    <input type="submit">

   <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Name = $_REQUEST["fname"];
        if(empty($Name)){
            echo "Name is empty";
        }
        else{
            echo $Name;
        }
    }
   ?>
</form>
</body>
</html>