<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends MY_Controller {

	function __construct(){

		parent::__construct();

	}

 	public function index(){

		$this->load->view('sites/index');
	}

	public function create($id = null){
		
		if ( $this->input->post() ){

			$client = new Cliente_model();

			$client['nombre'] = $this->input->post("nombre");
			$client['direccion'] = $this->input->post("direccion");
			$client['idMunicipio'] = $this->input->post("idMunicipio");
			$client['asignado'] = 0;
			$client['dia_visita'] = $this->input->post('dia_visita');

			if ( $client->save() ){
				redirect('admin/clientes');
			}
		}

		$municipio = new Municipio_model();

		$data['perfil'] = $this->municipio->getByIdAsArray($id);
		$data['perfiles'] = $this->municipio->getAllToSelect();


		$this->load->view("sites/create", $data);
	}	

}

?>