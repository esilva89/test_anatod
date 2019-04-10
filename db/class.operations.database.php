<?php
    require('../class.database.php');

	class class_operations_db {
		public $db;

		public function __construct() {
            $this->db = new class_db();
        }

        public function getLocalities() {
            $sql = "SELECT * FROM localidades ORDER BY localidades.nombre ASC";
            return $this->db->conn->query($sql);
        }

        public function addClient($nom, $dni, $idLoc) {
            $sql = "INSERT INTO clientes (nombre,dni,localidad) VALUES ('$nom','$dni','$idLoc')";
            $result = $this->db->conn->query($sql);
            return ($result ? true : false);
		}
        
        public function updateClient($nombre, $dni, $id_loc) {
            $sql = "UPDATE clientes
                    SET localidad = '$id_loc'
                    WHERE nombre LIKE '$nombre' AND dni = '$dni'";
            $this->db->conn->query($sql);
            return ($this->db->conn->affected_rows > 0 ? true : false);
        }

        public function getClientsLocalities() {
            $sql = "SELECT clientes.id, clientes.nombre, clientes.dni, localidades.nombre  AS 'nom_loc'
                    FROM clientes JOIN localidades ON clientes.localidad = localidades.id
                    ORDER BY clientes.nombre ASC";
            return $this->db->conn->query($sql);
        }
	}
?>