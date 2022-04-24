<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkboxes</title>
</head>
<body>
    <h1>input checkbox in php</h1>

    <form action="input_checkbox.php" method="post">
    Apples:  <input type="checkbox" name="fruits[]"value="apples"><br>
    Oranges:  <input type="checkbox" name="fruits[]"value="oranges"><br>
    Mango:  <input type="checkbox" name="fruits[]"value="mangoes"><br>
    <input type="submit">
    </form>

    <?php
       $fruits = $_POST["fruits"];
       echo $fruits[1];

    ?>
</body>
</html>