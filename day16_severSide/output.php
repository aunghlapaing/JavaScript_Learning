<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    # echo print print_r var_dump
        $name = "<h1>aunghla</h1>";
        echo($name)."<br>";

        $fruids = ['apple','fruids', 'mango'];
        print_r ($fruids);

        echo "<br><br>";

        foreach ($fruids as $x => $y){
            echo "$x : $y <br>"; 
        }

        echo "<br><br>";
        $username = "newuser";
        #if null, output default name
        echo $username ?? "default name" ;
    ?>
</body>
</html>