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
         $associArray = [
            'name' => 'Aung Hla',
            'job' => 'programmer'
         ];
         echo "<pre>";
         var_dump ($associArray);
         echo $associArray['name'] . "<br><br>";

         
         #multi-dimensional array
         $multiArray = [1,2,3, ['one', 'two', 'three']];
         echo "<pre>";
         var_dump ($multiArray);
         echo $multiArray[3][1] . "<br>";

        // data time format
         date_default_timezone_set ("Asia/Yangon");
         $current_date = date("d-m-Y h:i:s a");
         echo ($current_date) . "<br>";

        // adding day to current date usecase
         $discount_end = strtotime("+7days" , strtotime($current_date));
         echo date("d-m-Y", $discount_end);

        // iteration
        $number = [1,2,3,4,5];
        for ($i = 0; $i < count ($number); $i++){
            echo $number [$i] . "<br>";
        }


    ?>
</body>
</html>