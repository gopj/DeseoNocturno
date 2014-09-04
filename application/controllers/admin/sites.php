<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends MY_Controller {

	function __construct(){

		parent::__construct();

		$this->setLayout('admin');

		$this->load->model("site_model", "site");


	}

 	public function index(){

 		if($this->session->userdata['user']['profile'] == FALSE || $this->session->userdata['user']['profile'] != '1'){
			redirect(base_url().'login');
		}

		$data['sites'] = $this->site->getSites();

		$this->load->view('sites/index', $data);
	}

	public function create($id = null){
		
		if ( $this->input->post() ){

			$site = new Site_model();

			$site['siteName'] = $this->input->post("siteName");
			$site['address'] = $this->input->post("address");
			$site['phone'] = $this->input->post("phone");

			if ( $site->save() ){
				redirect('admin/sites');
			}
		}


		$this->load->view("sites/create");
	}

	public function update($id){

		$data['site'] = $this->site->getByIdAsArray($id);

		if (is_null($id)){
			redirect("admin/sites");
		}


		if ( $this->input->post() ){

			$site = new Site_model();

			$site['idSite'] = $id;
			$site['siteName'] = $this->input->post("siteName");
			$site['address'] = $this->input->post("address");
			$site['phone'] = $this->input->post("phone");

			if ( $site->save() ){
				redirect('admin/sites');
			}
		}


		$this->load->view("sites/update", $data);
	}


	public function delete($id){
		$this->site['idSite'] = $id;


		$this->site->delete();		

		redirect("admin/sites");
	}	

}

?>