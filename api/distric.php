<?php
    include('./class/init.php');
    $districController = new DistricController(new DistricModel($connection));
    if(isset($_POST['distric_name']))
    {
        echo $districController->save($_POST);
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
    <button><a href="../index.html">Back</a></button>
    <form action="" method="post">
        <input type="text" name="distric_name" placeholder="Distric name" required><br><br>
        <button type="submit" required>Submit</button>
    </form>
</body>
</html>