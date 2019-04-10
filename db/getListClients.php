<?php
    require('class.operations.database.php');
    require('./helpers/utils.php');
    
    $response = array();
	$response[0] = 400;

    $db = new class_operations_db();
    $clients_localities = $db->getClientsLocalities();
    if($clients_localities->num_rows) {
        $response[0] = 200;
        $response[1] = getClientsLocalities($clients_localities);
    }

    echo json_encode($response);
?>