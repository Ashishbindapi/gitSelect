<?php
    // header('Access-Control-Allow-Origin: *');

    // header('Access-Control-Allow-Methods: GET, POST');

    // header("Access-Control-Allow-Headers: X-Requested-With");
    
    include('./class/init.php');
    $stateController = new StateController(new stateModel($connection));
    $data = $stateController->statedata($_GET['country_id']);
    header("Content-type: application/json; charset=utf-8");
    echo json_encode( $data );