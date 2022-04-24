<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game1</title>
</head>
<body>
    <form action="game1.php" method="get">
     Color: <input type="text" name="color"><br>
     Plural noun: <input type="text" name="pluralnoun"><br>
     celebrity: <input type="text" name="celebrity"><br>
    <input type="submit">
    </form>
<?php
$color = $_GET["color"];
$pluralnoun = $_GET["pluralnoun"];
$celebrity = $_GET["celebrity"];
echo "Roses are $color <br>";
echo "$pluralnoun are blue <br>";
echo "I love $celebrity <br> ";

?>
</body>
</html>