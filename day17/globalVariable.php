<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | GlobalVariable</title>
</head>
<body>

    <h1>PHP</h1>
    <hr>
    <a href="./serverRequest.php?name=aunghla&key=101" target="_blank">Click Server Request</a>
    <form action="./serverRequest.php" method="get">
        <!-- <div class="">name : <input type="text" name="name"></div>
        <div>addresss : <input type="text" name="address"></div>
        <div><button type="submit">Submit</button></div>
        <div><button type="reset">Reset</button></div> -->

        name : <input type="text" name="name">
        <button type="submit">Submit</button>


    </form>

    <?php

        //$_GLOBAL && $_SERVER
        // echo "<pre>";
        // print_r ($_SERVER);
        // print_r ($_GET);
        // print_r ($_GET ['name']) ."<br>";
        // print_r ($_GET ['job']);

        session_start();
        $_SESSION['sessionData'] = "This is session data";

        print_r ($_SESSION);

    ?>
    
</body>
</html>