<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arrays1.php" method="post">
        <input type="text" name="car">
        <input type="submit">
    </form>
</body>
</html>
<?php 
 /* $cars = array("Toyato", "Volvo", "Swift", "Bmw", "Nexa");

 /// $arrlength = count($cars);
/*
  for($x = 0; $x < $arrlength; $x++){
      echo $cars[$x];
      echo "<br>";

  } 

  foreach($cars as $value){
      echo $value;
      echo "<br>";
  }
echo "<hr>";

  echo $cars[$_POST["car"]]; 

  $age = array("Peter"=> "12", "Himanshu"=>"20", "Rahul"=>"30", "SUbham"=>"43");
  
  $arrlenght = count($age);
 # echo $arrlenght;

   foreach($age as $x => $x_value){
       echo "Name= " . $x . ",  Age=" . $x_value;
       echo "<br>";  

   }
 */

 $car = array(
     array("valvo", 65, 44),
     array("Bmw", 43,56),
     array("Toyato", 4, 86),
     array("Land Rover", 54,54)
 );

 echo $car[0][0] . " " .$car[0][1] . " " .$car[0][2];
 echo "<br>";
 echo $car[1][0] . " " .$car[1][1] . " " .$car[1][2];
 echo "<br>";
 echo $car[2][0] . " " .$car[2][1] . " " .$car[2][2];

 echo "<hr>";

 for ($row = 0; $row < 4; $row++){
 echo "<h2> Row number<h2>";
 echo "<br>";
 for($col = 0; $col <3; $col++){
     echo $car[$row][$col];
 }
}
  ?>