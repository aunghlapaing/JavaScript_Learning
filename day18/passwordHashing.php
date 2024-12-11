<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Password Hashing</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>

    <?php
        $user_password = "admin123";

        // password hashing using PASSWORD_BCRYPT
        // $password_hash = password_hash ($user_password, PASSWORD_BCRYPT);

        $password_hash = '$2y$10$YNmuV8/HsSvbob2VEnUfpQJzV76LZkPpF2v7.Ajun.4X1TB68M.6';

        echo ($user_password) . "<br><br>";
        echo ($password_hash). "<br><br>";

        // check original password with hashpassword 

        if (password_verify($user_password, $password_hash)){
            echo "login successful";
        }else{
            echo "login failed!";
        }
    ?>
</body>
</html>