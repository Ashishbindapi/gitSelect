<?php
    include('./class/init.php');
    $countryController = new CountryController(new CountryModel($connection));
    $data = $countryController->countrydata();
    header("Content-type: application/json; charset=utf-8");
    echo json_encode( $data );