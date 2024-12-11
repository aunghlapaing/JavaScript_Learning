<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Single File</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="user_photo" id=""><br><br>
        <input type="submit" name="btn_post" value="POST" id="">
    </form>

    <?php
        echo "<pre>";
        if (isset($_POST['btn_post'])){
            print_r ($_FILES['user_photo']);

            // file size condition status
            $size_status = $_FILES ['user_photo']['size'] / 1000 >=10 ? false : true;
            if ($size_status){
                // assign variable for user Input file (name and  tmp name)
                $name = $_FILES ['user_photo']['name'];
                $tmp = $_FILES ['user_photo']['tmp_name'];

                // chose target location to store the file in our system
                $target_file = "image/". $name;

                // move user input file to target location
                move_uploaded_file ($tmp, $target_file);

                echo "success";
            }else{
                echo "error photo size ";
            }

        }
        
    ?>
</body>
</html>