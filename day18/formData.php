<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Form Data</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name" id=""><br>
        Email: <input type="text" name="email" id=""><br>
        Gender: 
        <input type="radio" name="gender" id="" value="male">male
        <input type="radio" name="gender" id="" value="female">female

        <br><br>

        Language:
        <input type="checkbox" name="language[]" id="" value="Myanmar">Myanmar
        <input type="checkbox" name="language[]" id="" value="English">English
        <input type="checkbox" name="language[]" id="" value="France">France
        <input type="checkbox" name="language[]" id="" value="Japanese">Japanese

        <br><br>

        Level:
        <select name="level" id="">
            <option value="lev1">level 1</option>
            <option value="lev2">level 2</option>
            <option value="lev3">level 3</option>
        </select>

        <br><br>
        <button type="submit" value="btn_post"name="btn_post">POST</button>
    </form>

    <?php
    echo "<pre>";

    if (isset ($_POST['btn_post'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $language = $_POST ['language'];

        echo "$name is $gender ";

        foreach ($language as $item){
            echo "$name language is $item";
        }

    }
    // print_r ($_POST);
    ?>
</body>

</html>