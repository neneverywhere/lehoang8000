<?php class c_menu extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_menu');
	}
	public function index() {		
		$this->load->view('backend/home');
	}

	public function getmenu(){
		$params = $this->uri->segment(4);
		if($params !=0 ){
			$data['ListMenuTwo']=$this->m_menu->ListMenuTwo($params);
			$this->load->view('backend/_getmenu',$data);
		}
	}

	public function ListMenu(){
		/*$total = $this->m_menu->CMenu(); // Tổng số menu
		$perpage = 10; // Số menu trên 1 trang
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
		$config['base_url'] =  base_url().'backend/c_menu/ListMenu/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);*/

		$data['ListMenu'] = $this->m_menu->ListMenu();
		//$data['pagination'] = $pagination; // Lấy thanh phân trang ra view
		$this->load->view('backend/home',$data);
	}

	public function AddMenu() {
		$data['ListMenuOne'] = $this->m_menu->ListMenuOne();
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_menu->AddMenu();
			redirect('backend/c_menu/ListMenu');
		}
	}

	public function DetailMenu(){
		$params = $this->uri->segment(4);
		$data['DetailMenu'] = $this->m_menu->DetailMenu($params);
		$data['ListMenuOne'] = $this->m_menu->ListMenuOne();
		$this->load->view('backend/home',$data);
	}

	public function EditMenu(){
		$params = $this->uri->segment(4);
		if(isset($_POST['submit'])){
			$this->m_menu->EditMenu($params);
			redirect('backend/c_menu/ListMenu');
		}
	}


	public function DeleteMenu($params){
		$this->m_menu->DeleteMenu($params);
		redirect('backend/c_menu/ListMenu');
	}
}//class
?>