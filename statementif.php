<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement</title>
</head>
<body>
    <h1>if else statement</h1>

    <?php

   /* $num1 = 4;

    if($num1<=4){
        echo "I leave my house";

    }else{
        echo " i not going to anywhere";
    }
  */
    function getmax($num1, $num2){
        if($num1 > $num2){
            echo "this is max number<br>";

           return $num1;
        }else{
            return $num2;
        }
    }

    $number = getmax(577,344);
    echo $number;
    ?>
</body>
</html>