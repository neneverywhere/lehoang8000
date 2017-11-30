<?php class c_home extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$db = $this->load->database();
		$this->load->helper('url');
		$this->load->model('frontend/m_home');
		$this->load->model('frontend/m_header');
		$this->load->model('frontend/m_news_catalog');
		$this->load->model('frontend/m_product_catalog');
		$this->load->model('frontend/m_footer');
	}
	public function index() {
		$data['slider'] = $this->m_home->slider();
		$data['sidebar'] = $this->m_home->sidebar();
		$data['catalog'] = $this->m_home->Catalog();
		$data['Newproduct'] = $this->m_home->Newproduct();
		$data['Newnews'] = $this->m_home->Newnews();
		$data['Hotproduct'] = $this->m_home->Hotproduct();
		$data['Khuyenmai'] = $this->m_home->Khuyenmai();
		$data['Phukien'] = $this->m_home->Phukien();
		$data['Title'] = $this->m_home->Title();
		$data['Keyword'] = $this->m_home->Keyword();
		$data['Description'] = $this->m_home->Description();
		$this->load->view('frontend/home',$data);
	}

}//class
