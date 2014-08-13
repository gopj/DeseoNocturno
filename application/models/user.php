<?php
Class User extends CI_Model{
	
	function login($username, $password){
		$this->db->select('idUser, email, password');
		$this->db->from('users');
		$this->db->where('email', $username);
		$this->db->where('password', MD5($password));

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}