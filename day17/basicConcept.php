<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Basic Concept</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>
    <?php
        $name = "Aung Hla";

        echo "This is $name ";

        echo "<br><br>";

        $status = true;
        if($status){
            echo "This is status";
        }else {
            echo "<p>this error message</p>";
        }

        echo "<br><br>";

        #global variable in php
         $global_data = "This is Global Data";

         function calling(){
            global $global_data;
            echo ($global_data);
         }
         calling();

         echo "<br><br>";
         #index array
         $indexArray = ['one', 'two', 'three'];
         var_dump($indexArray) ;

         echo "<br><br>";

         #associated array
        
         #multi-dimensional array

         date_default_timezone_set ("Asia/Yangon");
         $current_date = date("d-m-Y");
         echo ($current_date);


    ?>
</body>
</html>