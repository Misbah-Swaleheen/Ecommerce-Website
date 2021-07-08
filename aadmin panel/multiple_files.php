<?php 
    if (isset($_POST['sub'])) {
        // var_dump($_FILES['img']);

        foreach ($_FILES['img']['name'] as $file) {
            echo $file."<br>";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img[]" id="" multiple="true">
<input type="submit" value="Submit" name="sub">
</form>
</body>
</html>