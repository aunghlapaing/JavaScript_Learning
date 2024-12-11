<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Json Encode Decode</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>

    <?php

        $user_data = [
            'name' => 'Aung Hla',
            'job' => 'Programmer'
        ];

        echo "<pre>";
        print_r ($user_data);

        echo "<br><br>";

        $json_encode = json_encode ($user_data);

        echo ($json_encode) . "<br><br>";

        $json_decode = json_decode ($json_encode);

        print_r ($json_decode);

    ?>
</body>
</html>