<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | serverRequest</title>
</head>
<body>
    <!-- get method form  -->
    <!-- <form action="" method="get">
        name: <input type="text" name="name">
        address: <input type="text" name="address">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form> -->

    <!-- post method form -->
    <!-- <form action="" method="post">
        name: <input type="text" name="name">
        address: <input type="text" name="address">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form> -->
    <?php

        echo "<pre>";

        // print_r ($_GET);

        //url initial state == > http://localhost:5554/
        //url after get method sate == > http://localhost:5554/?name=aunghla&address=bangkok

        // print_r ($_POST);

        //url initial state == > http://localhost:5554/
        //url after post method state == > http://localhost:5554/

        #$_SESSION method
        session_start();
        print_r ($_SESSION['sessionData']);

    ?>  
</body>
</html>