<?php
    include('./class/init.php');
    $districController = new DistricController(new DistricModel($connection));
    $data = $districController->districdata();
    header("Content-type: application/json; charset=utf-8");
    echo json_encode( $data );