<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP request method</title>
</head>
<body>
    <form action="request2.php" method="POST">
        <input type="text" placeholder="Enter your Name" name="name">
        <br>
        <input type="submit">

         <?php
         /*
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_REQUEST['name'];
        if(empty($name)){
            echo "Please Enter the Right Name";
        }else{
            echo $name;
        }
    }
    -->
    */
     ?>
</form>

<?php 
$name = $_REQUEST['name'];
echo $name;
?>
</body>
</html>