<?php class c_product extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$db = $this->load->database();
		$this->load->helper('url');
		$this->load->model('frontend/m_header');
		$this->load->model('frontend/m_footer');
		$this->load->model('frontend/m_home');
		$this->load->model('frontend/m_product');
		$this->load->model('frontend/m_product_catalog');
	}

	public function DetailProduct(){
		$params = $this->uri->segment(3);
		$params = explode('.', $params);
		$params = $params[0];
		$data['Title'] = $this->m_product->Title($params);
		$data['Keyword'] = $this->m_product->Keyword($params);
		$data['Description'] = $this->m_product->Description($params);
		$data['similar'] = $this->m_product->SimilarProduct($params);
		$data['webcrumb'] = $this->m_product->Webcrumb();
		$data['sidebar'] = $this->m_product_catalog->sidebar();

		$cal = $this->uri->segment(2);
		$checklink = $this->m_product->CheckLink($cal);
		if($checklink==true){
			$data['DetailProduct'] = $this->m_product->DetailProduct($params);
			$this->load->view('frontend/product',$data);
		}else{
			$cal = $this->m_product->GetCal($params);
			$path = $this->uri->segment_array();
			$path[2] = $cal;
			redirect($path);
		}
	}
}//class
