
<?php 
 #echo include("userin.php");
   $username = 'root';
   $userpass = '';
   $userdb = 'testdb';

   $conn = mysqli_connect("localhost", $username, $userpass, $userdb);

   if(!$conn){
    die("could not connect:" .mysqli_error());
       
   }
   else {
    echo "connected successfully<br>";
   }

   $sql = "CREATE DATABASE AND CONNECT WITH MYSQL";
    $retval = mysql_query($sql, $conn);

    if(! $retval){
        die("Could not create database" . mysqli_error());
    }else{
        echo "Database connection and create successfully<br>";
    }

 ?>