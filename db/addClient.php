<?php
	require('class.operations.database.php');

	if(!empty($_POST['nombre']) && !empty($_POST['dni']) && !empty($_POST['localities']) && is_numeric($_POST['dni'])) {
		$db = new class_operations_db();
        $query = $db->addClient($_POST['nombre'], $_POST['dni'], $_POST['localities']);
        if($query) {
            header('location: ../views/listClients.html');
        } else {
            header('location: ../index.html?error=1');
        }
    } else {
        header('location: ../index.html?error=2');
    }
?>