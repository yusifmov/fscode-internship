<?php
include './controller/uploadimage.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <title>Image Upload</title>
</head>

<body>
    <div id="formcontainer">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="submit" value="Upload">
        </form>
        <span class="help-block"><?php echo $message; ?></span>
    </div>
    
    <?php
    include './controller/fetchimage.php';
    ?>
</body>

</html>