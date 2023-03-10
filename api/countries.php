<?php

    header('Access-Control-Allow-Origin: *');

    header('Access-Control-Allow-Methods: GET, POST');

    header("Access-Control-Allow-Headers: X-Requested-With");

    include('./class/init.php');
    $countryController = new CountryController(new CountryModel($connection));
    $data = $countryController->countrydata();
    header("Content-type: application/json; charset=utf-8");
    echo json_encode( $data );