<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct(){

		parent::__construct();

	}

 	public function index(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$this->load->model("User_model", "user");

			if($this->user->identify($this->input->post('email'), $this->input->post('password'))){

				// Preparar informacion para la sesion
				$user = array(
					'idUser' => $this->user['idUser'],
					'name' => $this->user['firstName'],
					'profile' => $this->user['idProfile']
				);

				$this->session->set_userdata('user', $user);
				
				switch ($this->session->userdata['user']['profile']){
					case '1':
						redirect("admin/index/");
						break;					
					case '2':
						redirect("user/index/");
						break;						
				}
	

			} else {
				// Mostrar motivo de error

			}
		}

		$this->load->view('login/index');
	}

}

?>
