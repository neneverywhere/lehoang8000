<?php class c_config extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_config');
	}
	public function index() {
		$this->load->view('backend/home');
	}

	public function ListConfig() {
		$data['ListConfig'] = $this->m_config->ListConfig();
		$this->load->view('backend/home',$data);
	}

	public function EditConfig() {
		$data['ListConfig'] = $this->m_config->ListConfig();
		$this->load->view('backend/home',$data);
	}

	public function UpdateConfig() {
		$this->m_config->UpdateConfig();
		redirect('backend/c_config/ListConfig');
	}

}//class
