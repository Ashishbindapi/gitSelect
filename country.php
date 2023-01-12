<?php
    include('./class/init.php');
    $countryController = new CountryController(new CountryModel($connection));
    if(isset($_POST['country']))
    {
        $countryController->savecountry($_POST);
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
    <form action="" method="post">
        <input type="text" name="country" placeholder="Country name" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
        /*<div>
            <select name="country" id="">
                <option value="">Country name</option>
                <option value=""></option>
            </select>

            <select name="state" id="">
                <option value="">State name</option>
                <option value=""></option>
            </select>

            <select name="distric" id="">
                <option value="">Distric name</option>
                <option value=""></option>
            </select>
            <button type="submit">Submit</button>
        </div>
        <script src="./ja_component/jquery-3.6.3.js"></script>
        <script src="./js/script.js"></script>
            <form action="" method="post">
        <input type="text" name="country" placeholder="Country name"><br><br>
        <input type="text" name="state" placeholder="State name"><br><br>
        <input type="text" name="distric" placeholder="Distric name"><br><br>
        <input type="text" name="disabled" placeholder="disabled"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>*/
        ?>