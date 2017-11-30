<?php class c_project extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_project');
		$this->load->model('backend/m_project_catalog');
	}
	public function index() {
		$this->load->view('backend/home');
	}

	public function ListProject() {
		$a = $this->m_project->CProject();
		$total = count($a); // Tổng số dự án
		$perpage = 5; // Số dự án trên 1 trang

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
		$config['base_url'] =  base_url().'backend/c_project/ListProject/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);
		$data['ListProject'] =  $this->m_project->ListProject($offset,$perpage); 
		$data['pagination'] = $pagination; // Lấy thanh phân trang ra view
		$this->load->view('backend/home',$data); // Lấy dữ liệu ra view
	}

	public function AddProject() {
		$data['editor'] = $this->tinymce(); // Lấy trình soạn thảo tinymce
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_project->AddProject();
			redirect('backend/c_project/ListProject');
		}
	}

	public function DetailProject(){
		$data['editor'] = $this->tinymce();
		$params=$this->uri->segment(4);
		$data['DetailProject'] = $this->m_project->DetailProject($params);
		$this->load->view('backend/home',$data);
	}

	public function DeleteProject($params){
		$this->m_project->DeleteProject($params);
		redirect('backend/c_project/ListProject');
	}

	public function EditProject() {
		$params = $this->uri->segment(4);
		$this->m_project->EditProject($params);
		redirect('backend/c_project/ListProject');
	}
}//class
