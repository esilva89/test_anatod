<?php
    require('class.operations.database.php');
    require('./helpers/utils.php');
    
    $response = array();
	$response[0] = 400;

    $db = new class_operations_db();
    $localities = $db->getLocalities();
    if($localities && $localities->num_rows) {
        $response[0] = 200;
        $response[1] = getLocalities($localities);
    }

    echo json_encode($response);
?>