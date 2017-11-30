<?php class c_news_catalog extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_news_catalog');
	}
	public function index() {		
		$this->load->view('backend/home');
	}

	public function ListNewsCatalog() {
		$this->load->view('backend/home');
	}

	public function DetailNewsCatalog(){
		$this->load->view('backend/home');
	}

	public function AddNewsCatalog() {
		$this->load->view('backend/home');
		if(isset($_POST['submit'])){
			$this->m_news_catalog->AddNewsCatalog();
			redirect('backend/c_news_catalog/ListNewsCatalog');
		}
	}

	public function EditNewsCatalog() {
		$params = $this->uri->segment(4);
		$this->m_news_catalog->EditNewsCatalog($params);
		redirect('backend/c_news_catalog/ListNewsCatalog');
	}

	public function DeleteNewsCatalog($params){
		$this->m_news_catalog->DeleteNewsCatalog($params);
		redirect('backend/c_news_catalog/ListNewsCatalog');
	}
}//class
