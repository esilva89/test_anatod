<?php
	function getLocalities($regLocalities) {
		$i = 0;
		while($locality = $regLocalities->fetch_assoc()) {
			$localities[$i] = ["id" => $locality['id'], "nom" => $locality['nombre']];
			$i++;
		}
		return $localities;
	}

	function getClientsLocalities($regClientsLocalities) {
		$i = 0;
		while($client_loc = $regClientsLocalities->fetch_assoc()) {
            $clients_locs[$i] = [ "id" => $client_loc['id'], "nom" => $client_loc['nombre'],
                                	"dni" => $client_loc['dni'], "nom_loc" => $client_loc['nom_loc']];
			$i++;
		}
		return $clients_locs;
	}
?>