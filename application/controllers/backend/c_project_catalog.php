<?php class c_project_catalog extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_project_catalog');
	}
	public function index() {		
		$this->load->view('backend/home');
	}

	public function ListProjectCatalog() {
		$data['ListProjectCatalog'] = $this->m_project_catalog->ListProjectCatalog();
		$this->load->view('backend/home',$data);
	}

	public function DetailProjectCatalog(){
		$params = $this->uri->segment(4);
		$data['DetailProjectCatalog'] = $this->m_project_catalog->DetailProjectCatalog($params);
		$this->load->view('backend/home',$data);
	}

	public function AddProjectCatalog() {
		$this->load->view('backend/home');
		if(isset($_POST['submit'])){
			$this->m_project_catalog->AddProjectCatalog();
			redirect('backend/c_project_catalog/ListProjectCatalog');
		}
	}

	public function EditProjectCatalog() {
		$params = $this->uri->segment(4);
		$this->m_project_catalog->EditProjectCatalog($params);
		redirect('backend/c_project_catalog/ListProjectCatalog');
	}

	public function DeleteProjectCatalog($params){
		$this->m_project_catalog->DeleteProjectCatalog($params);
		redirect('backend/c_project_catalog/ListProjectCatalog');
	}
}//class
