<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Name--> <?php
    // includdin itwo php  1. include.php and include1.php_check_syntax
    echo $name;
    echo "<hr>";
     ?></h1>

     <h2>Age: <?php

     echo $age; ?></h2>

     <h4>Grade :<?php echo $grade ?></h4>

     <h5><?php
     function myfunction(){
         echo " just checking the concept of include php using function";
     }
      ?></h5>
</body>
</html>