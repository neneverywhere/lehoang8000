<?php class c_slideshow extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_slideshow');
	}
	public function index() {		
		$this->load->view('backend/home');
	}

	public function ListSlideshow(){
		$data['ListSlideshow'] = $this->m_slideshow->ListSlideshow();
		$this->load->view('backend/home',$data);
	}

	public function AddSlideshow() {
		$this->load->view('backend/home');
		if(isset($_POST['submit'])){
			$this->m_slideshow->AddSlideshow();
			redirect('backend/c_slideshow/ListSlideshow');
		}
	}

	public function DeleteSlideshow($params){
		$this->m_slideshow->DeleteSlideshow($params);
		redirect('backend/c_slideshow/ListSlideshow');
	}

	public function DetailSlideshow(){
		$params=$this->uri->segment(4);
		$data['DetailSlideshow'] = $this->m_slideshow->DetailSlideshow($params);
		$this->load->view('backend/home',$data);
	}

	public function EditSlideshow() {
		$params = $this->uri->segment(4);
		$this->m_slideshow->EditSlideshow($params);
		redirect('backend/c_slideshow/ListSlideshow');
	}
}//class
