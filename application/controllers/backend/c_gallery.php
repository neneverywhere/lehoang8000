<?php class c_gallery extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_gallery');
	}


	public function ListGallery(){
		$total = $this->m_gallery->CGallery();
		$perpage = 5; // Số gallery trên 1 trang
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
		$config['base_url'] =  base_url().'backend/c_gallery/ListGallery/page/';
		$config['uri_segment']	 =  5;
		$this->pagination->initialize($config); 
		$pagination =  $this->pagination->create_links(); // Khởi tạo phân trang
		$offset  =  ($this->uri->segment(5)=='') ? 0 : $this->uri->segment(5);

		$data['ListGallery'] = $this->m_gallery->ListGallery($offset,$perpage);
		$data['pagination'] = $pagination; // Lấy thanh phân trang ra view
		$this->load->view('backend/home',$data);
	}

	public function AddGallery(){
		$this->load->view('backend/home');
		if(isset($_POST['submit'])){
			$this->m_gallery->AddGallery();
			redirect('backend/c_gallery/ListGallery');
		}
	}

	public function DetailGallery(){
		$params = $this->uri->segment(4);
		$data['DetailGallery'] = $this->m_gallery->DetailGallery($params);
		$this->load->view('backend/home',$data);
	}

	public function DeleteGallery($params){
		$this->m_gallery->DeleteGallery($params);
		redirect('backend/c_gallery/ListGallery');
	}

	public function UpdateGallery(){
		$params = $this->uri->segment(4);
		$this->m_gallery->UpdateGallery($params);
		redirect('backend/c_gallery/ListGallery');
	}

}//class
?>