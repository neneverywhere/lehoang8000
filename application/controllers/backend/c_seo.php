<?php class c_seo extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_seo');
	}
	public function ListCode() {
		$data['ListCode'] = $this->m_seo->ListCode();
		$this->load->view('backend/home',$data);
	}

	public function EditCode() {
		$data['ListCode'] = $this->m_seo->ListCode();
		$this->load->view('backend/home',$data);
	}

	public function UpdateCode(){
		$this->m_seo->UpdateCode();
		redirect('backend/c_seo/ListCode');
	}

}//class
