<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | fileHandling</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>
    <?php
        //write
        $file_write = fopen ("testingfile.txt","w");
        fwrite ($file_write, "This is testing for the write file in php.");

        $file_read = fopen ("testingfile.txt", "r");
        $read_file = fread ($file_read, filesize("testingfile.txt"));
        echo ($read_file);
        
    ?>
</body>
</html>