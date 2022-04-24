<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Php Calculator</h1>
    <!--using if ele statement -->

    <form action="calcu.php" method="post">
    First Number:<br> <input type="number" step="0.001" name="num1" ><br>
    Operator:<br> <input type="textbar" name="op"><br>
    Second Number: <br><input type="number" name="num2" ><br>
   <br>
    <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
       echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1 - $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }else{
        echo "Please Enter the Number for Result!";
    }
     ?>
</body>
</html>