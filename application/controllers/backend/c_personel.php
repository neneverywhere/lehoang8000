<?php class c_personel extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_personel');
	}
	public function index() {
		$this->load->view('backend/home');
	}

	public function ListPersonel() {
		$a = $this->m_personel->countpersonel();
		$total = $a; // Tổng số recode
		$perpage = 5; // Số recode trên 1 trang

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
		$config['base_url'] =  base_url().'backend/c_personel/ListPersonel/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);
		$data['ListPersonel'] =  $this->m_personel->ListPersonel($offset,$perpage); 
		$data['pagination'] = $pagination; // Lấy thanh phân trang ra view
		$this->load->view('backend/home',$data); // Lấy dữ liệu ra view
	}

	public function AddPersonel() {
		$data['editor'] = $this->tinymce(); // Lấy trình soạn thảo tinymce
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_personel->AddPersonel();
			redirect('backend/c_personel/ListPersonel');
		}
	}

	public function DetailPersonel(){
		$params = $this->uri->segment(4);
		$data['editor'] = $this->tinymce();
		$data['DetailPersonel'] = $this->m_personel->DetailPersonel($params);
		$this->load->view('backend/home',$data);
	}

	public function DeletePersonel($params){
		$this->m_personel->DeletePersonel($params);
		redirect('backend/c_personel/ListPersonel');
	}

	public function UpdatePersonel() {
		$params = $this->uri->segment(4);
		$this->m_personel->UpdatePersonel($params);
		redirect('backend/c_personel/ListPersonel');
	}
}//class
