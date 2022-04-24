<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in php</title>
</head>
<body>
    <h1>Arrays in php</h1>
  <form action="arrays.php" method="post">
      <input type="text" name="student">
      <input type="submit">
  </form>
    <?php
  //  $friend = array("hiamshu", "shibu", "rai", "Kumar");
  ///  echo $friend[0];
  //  echo "<br>";
  //  echo count($friend);
  echo "<hr>";
  echo "<h1> Associate arrays </h1>";
   
   
  $grades = array("himanshu"=> "A+", "Pam"=>"B+", "Oscar"=> "c+");
    // himanshuu is key and A+ is values
   // key  is uniques and values can be same,
   // echo $grades["himanshu"];
    //echo "<br>";
   // echo count($grades);
   // echo "<br>";
   // echo "<br>";

   echo $grades[$_POST["student"]];
    //echo $grades[$_POST["himanshu"]];
    ?>
</body>
</html>