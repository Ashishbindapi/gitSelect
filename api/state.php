<?php
    include('./class/init.php');
    $stateController = new StateController(new stateModel($connection));
    if(isset($_POST['state_name']))
    {
        echo $stateController->save($_POST);
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
        <input type="text" name="state_name" placeholder="State name" required><br><br>
        <button type="submit" required>Submit</button>
    </form><br>
    <style>
        form{
            margin-top:10px;
        }
    </style>
</body>
</html>