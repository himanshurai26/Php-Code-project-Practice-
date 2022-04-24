<?php  
  echo "<h1>Date and Time in php</h1>";
 
  //echo "Today Date is!" ." ". Date("Y/m/d");
 // echo "<br>";
 // echo Date("l");
   date_default_timezone_set("America/New_York");
   
   echo Date("h:i:sa");
  
 
  $d = mktime(8,47,56,12,12,2021);
   echo date("Y-m-d h:i:sa", $d)
 
?>