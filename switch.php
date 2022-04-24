<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="switch.php" method="post">
       <h4> What was your grade?</h4>
        <input type="text" name="grade" >
        <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    switch($grade){
       case "A": 
        echo "you did amazing";
        break;
        case "B":
            echo "you did preety good";
            break;
            CASE "C":
            echo "not good";
            break;
            default:
                echo "invalid";
            

    }
 
    ?>
</body>
</html>