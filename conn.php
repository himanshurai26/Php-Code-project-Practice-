<?php

$user = 'root';
$pass = '';
$db = 'testdb';


$db = new mysqli('localhost', $user, $pass, $db);

if (!$db){
    die("could not connect some error". mysqli_error());
   
}

if(isset($_POST['save']))
{
    $fname = $_POST['name'];
    $fage = $_POST['age'];

    $sql = "INSERT INTO detail(name,age) VALUES ('$fname', '$fage')";

    if(mysqli_query($db, $sql))
    {
        echo "<h1>thnks for sharing your information!(Be happy)</h1>";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($db);
    }
    mysqli_close($db);
}
   



?>