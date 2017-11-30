<?php class c_bill extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_bill');
	}

	public function ListBill(){
		$total = $this->m_bill->CBill();
		$perpage = 10; // Số tin trên 1 trang
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
		$config['base_url'] =  base_url().'backend/c_Bill/ListBill/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);
		$data['pagination'] = $pagination; // Lấy thanh phân trang ra view

		$data['ListBill'] = $this->m_bill->ListBill($offset,$perpage);
		$this->load->view('backend/home',$data);
	}

	public function DeleteBill($params){
		$this->m_bill->DeleteBill($params);
		redirect('backend/c_bill/ListBill');
	}

}//class
