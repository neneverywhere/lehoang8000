<?php class c_home extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$db = $this->load->database();
		$this->load->helper('url');
		$this->load->model('backend/m_admin');
	}
	public function index() {
		$this->load->view('backend/home');
	}

}//class
