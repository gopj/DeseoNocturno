<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rest_sites extends MY_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model("site_model", "site");
		$this->setLayout('blank');
	}

 	public function index(){

 		if($this->session->userdata['user']['profile'] == FALSE || $this->session->userdata['user']['profile'] != '1'){
			redirect(base_url().'login');
		}

		$sites = $this->site->getSites();

		foreach ($sites->result() as $site) {
			$res_sites['id'] = $site->idSite;
			$res_sites['name'] = $site->siteName;
			$res_sites['address'] = $site->address;
			$res_sites['phone'] = $site->phone;

			$all_sites[] = $res_sites;
		}

		$final_res = json_encode($all_sites);

		echo $final_res;

	}

	

}

?>