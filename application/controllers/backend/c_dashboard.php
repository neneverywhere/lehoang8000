<?php class c_dashboard extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$db = $this->load->database();
		$this->load->helper('url');
		$this->load->model('backend/m_dashboard');
	}

	public function index() {
		$this->load->view('backend/home');
	}

	public function DashBoard() {
		$data['newscatalog'] = $this->m_dashboard->CountNewsCatalog();
		$data['news'] = $this->m_dashboard->CountNews();
		$data['slider'] = $this->m_dashboard->CountSlider();
		$data['menu'] = $this->m_dashboard->CountMenu();
		$data['user'] = $this->m_dashboard->CountUser();
		$data['gallery'] = $this->m_dashboard->CountGallery();
		$data['partner'] = $this->m_dashboard->CountPartner();
		$data['projectcatalog'] = $this->m_dashboard->CountProjectCatalog();
		$data['project'] = $this->m_dashboard->CountProject();
		$data['productcatalog'] = $this->m_dashboard->CountProductCatalog();
		$data['product'] = $this->m_dashboard->CountProduct();
		$data['uservisited'] = $this->m_dashboard->CountVisited();
		$data['useronline'] = $this->m_dashboard->CountOnline();
		$this->load->view('backend/home',$data);
	}

}//class
