<?php class c_news extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_news');
		$this->load->model('backend/m_news_catalog');
	}
	public function index() {
		$this->load->view('backend/home');
	}

	public function ListNews() {
		$a = $this->m_news->CNews();
		$total = count($a); // Tổng số tin
		$perpage = 5; // Số tin trên 1 trang

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
		$config['base_url'] =  base_url().'backend/c_news/ListNews/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);
		$data['ListNews'] =  $this->m_news->ListNews($offset,$perpage); 
		$data['pagination'] = $pagination; // Lấy thanh phân trang ra view
		$this->load->view('backend/home',$data); // Lấy dữ liệu ra view
	}

	public function AddNews() {
		$data['editor'] = $this->tinymce(); // Lấy trình soạn thảo tinymce
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_news->AddNews();
			redirect('backend/c_news/ListNews');
		}
	}

	public function DetailNews(){
		$data['editor'] = $this->tinymce();
		$this->load->view('backend/home',$data);
	}

	public function DeleteNews($params){
		$this->m_news->DeleteNews($params);
		redirect('backend/c_news/ListNews');
	}

	public function EditNews() {
		$params = $this->uri->segment(4);
		$this->m_news->EditNews($params);
		redirect('backend/c_news/ListNews');
	}
}//class
