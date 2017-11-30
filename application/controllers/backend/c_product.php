<?php class c_product extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_product');
	}
	public function index() {		
		$this->load->view('backend/home');
	}

	public function ListProduct(){
		$total = $this->m_product->CProduct(); // Tổng số sản phẩm
		$perpage = 10; // Số sản phẩm trên 1 trang

		$this->load->library('pagination');
		$config['total_rows']  =  $total;
		$config['per_page']  =  $perpage;
		$config['next_link'] =  'Next »';
		$config['prev_link'] =  '« Prev';
		$config['num_tag_open'] =  '';
		$config['num_tag_close'] =  '';
		$config['num_links']	=  5;
		$config['cur_tag_open'] =  '<a class="currentpage">';
		$config['cur_tag_close'] =  '</a>';
		$config['base_url'] =  base_url().'backend/c_product/ListProduct/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);
		$data['pagination'] = $pagination; // Lấy thanh phân trang ra view
		$data['ListProduct']=$this->m_product->ListProduct($offset,$perpage);
		$this->load->view('backend/home',$data);
	}

	public function AddProduct() {
		$data['editor'] = $this->tinymce(); // Lấy trình soạn thảo tinymce
		$data['parent'] = $this->m_product->GetParent();
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_product->AddProduct();
			redirect('backend/c_product/ListProduct');
		}
	}

	public function DeleteProduct($params){
		$this->m_product->DeleteProduct($params);
		redirect('backend/c_product/ListProduct');
	}

	public function UpdateProduct() {
		$params = $this->uri->segment(4);
		$this->m_product->UpdateProduct($params);
		redirect('backend/c_product/ListProduct');
	}

	public function getproductchild(){
		$params = $this->uri->segment(4);
		if($params !=0 ){
			$data['productchild']=$this->m_product->productchild($params);
			$this->load->view('backend/_productchild',$data);
		}
	}

	public function DetailProduct(){
		$params = $this->uri->segment(4);
		$data['editor'] = $this->tinymce();
		$data['parent'] = $this->m_product->GetParent();
		$data['DetailProduct'] = $this->m_product->DetailProduct($params);
		$this->load->view('backend/home',$data);
	}

}//class
