<?php class c_product_catalog extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_product_catalog');
	}
	public function index() {		
		$this->load->view('backend/home');
	}

	public function DeleteProductCatalog($params){
		$this->m_product_catalog->DeleteProductCatalog($params);
		redirect('backend/c_product_catalog/ListProductCatalog');
	}

	public function ListProductCatalog() {
		$data['ListProductCatalogParent'] = $this->m_product_catalog->GetParent();
		$this->load->view('backend/home',$data);
	}

	public function AddProductCatalog() {
		$data['parent'] = $this->m_product_catalog->GetParent();
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_product_catalog->AddProductCatalog();
			redirect('backend/c_product_catalog/ListProductCatalog');
		}
	}

	public function DetailProductCatalog(){
		$params = $this->uri->segment(4);
		$data['parent'] = $this->m_product_catalog->GetParent();
		$data['DetailProductCatalog'] = $this->m_product_catalog->DetailProductCatalog($params);
		$this->load->view('backend/home',$data);
	}

	public function UpdateProductCatalog(){
		$params = $this->uri->segment(4);
		$this->m_product_catalog->UpdateProductCatalog($params);
		redirect('backend/c_product_catalog/ListProductCatalog');
	}

}//class
