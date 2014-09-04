<?php 

class Site_model extends My_Model {

	public function __construct() {

		$this->tableName = 'sites';
		$this->primaryKey = 'idSite';
		$this->load->database();

		parent::__construct();

	}

	public function getSites(){

		$query = $this->db->query('
			SELECT * FROM sites;
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

	


}

?>