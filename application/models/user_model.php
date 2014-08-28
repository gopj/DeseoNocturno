<?php 

class User_model extends My_Model {

	public function __construct() {

		$this->tableName = 'users';
		$this->primaryKey = 'idUser';
		$this->load->database();

		parent::__construct();

	}

	public function getUsers(){

		$query = $this->db->query('
			SELECT * FROM users;
		');
		if($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else{
			return false;	
		}
		return $query;
	}

	
	public function identificar($email, $password){

		$identificar = FALSE;

		// Limpiamos los valores de posible inyeccion XSS
		$email = $this->security->xss_clean($email);
		$password = $this->security->xss_clean($password);

		// Preparar la consulta
		$this->db->where('email', $email);
		$this->db->where('password', sha1($password));
		$this->db->limit(1);

		// Obtenemos el resultado de la consulta
		$query = $this->db->get($this->tableName);

		// Si se encontro un resultado
		if($query->num_rows() == 1){
			// Asignar los valores al record
			$this->record = $query->row_array();
			// Asignar identificacion positiva
			$identificar = TRUE;
		}

		return $identificar;
	}

}

 ?>