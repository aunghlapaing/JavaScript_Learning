<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Multiple File</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="user_photo[]" id="" multiple><br><br>
        <input type="submit" name="btn_post" value="POST" id="">
    </form>

    <?php
    echo "<pre>";
    if (isset($_POST['btn_post'])){
        // print_r ($_FILES['user_photo']);

        foreach ($_FILES as $img){
            print_r  ($img);
            foreach($img ['name'] as $index => $img_name){
                print_r ($index . $img_name);
                $name = $img_name;
                $tmp = $img ['tmp_name'][$index];

                $target_file = "image/" . $name;

                move_uploaded_file ($tmp, $target_file);
            }
        }

        echo "Success";
    }
        
        
    ?>
</body>
</html>