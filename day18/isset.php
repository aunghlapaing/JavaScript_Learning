<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | isset</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>
    <form action="" method="post">
        <input type="text" name="name">
        <button type="submit" name="btn_post">POST</button>
    </form>
    <?php
        echo "<pre>";
        // if (isset($_POST['btn_post'])){
        //     print_r ($_POST);
        // }
        // print_r ($_POST);

        

        session_start();

        // session_destroy();
        $_SESSION ['userData'] = 'This is user data';

        if (isset($_SESSION['userData'])){
            print_r($_SESSION['userData']);
        }

        // print_r ($_SESSION['userData']);

        
    ?>
</body>
</html>