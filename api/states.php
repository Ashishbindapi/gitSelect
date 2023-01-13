<?php
    include('./class/init.php');
    $stateController = new StateController(new stateModel($connection));
    $data = $stateController->statedata();
    header("Content-type: application/json; charset=utf-8");
    echo json_encode( $data );