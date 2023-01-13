<?php
    include('./class/init.php');
    $stateController = new StateController(new stateModel($connection));
    $data = $stateController->countrydata();
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
    <select name="" id="">
        <option value="">Country name</option>
        <?php foreach($data as $country){?>
        <option value=""><?php echo $country['country_name'] ?></option>
        <?php }?>
    </select>
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