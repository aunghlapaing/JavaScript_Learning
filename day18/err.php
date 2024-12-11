<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Error Handling</title>
</head>
<body>  

    <h1>PHP</h1>
    <hr>
    <?php

    echo "This is Error handling Page <br><br>";

    function division ($num1, $num2) {
        if ($num2 == 0){
            throw new Exception ("This is error message");
        }else {
            echo ($num1 / $num2);
        }
    }

    try{
        division(10, 5);
    }catch (Exception $error){
        echo $error;
    }
    ?>
</body>
</html>