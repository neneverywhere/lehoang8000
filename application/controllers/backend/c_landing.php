<?php class c_landing extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_landing');
	}

	public function ListLanding() {
		$data['ListLanding'] = $this->m_landing->ListLanding();
		$this->load->view('backend/home',$data);
	}

	public function AddLanding() {
		$data['editor'] = $this->tinymce(); // Lấy trình soạn thảo tinymce
		$this->load->view('backend/home',$data);
		if(isset($_POST['submit'])){
			$this->m_landing->AddLanding();
			redirect('backend/c_landing/ListLanding');
		}
	}

	public function DeleteLanding($params){
		$this->m_landing->DeleteLanding($params);
		redirect('backend/c_landing/ListLanding');
	}

	public function DetailLanding(){
		$data['editor'] = $this->tinymce();
		$params=$this->uri->segment(4);
		$data['DetailLanding']=$this->m_landing->DetailLanding($params);
		$this->load->view('backend/home',$data);
	}

	public function UpdateLanding() {
		$params = $this->uri->segment(4);
		$this->m_landing->UpdateLanding($params);
		redirect('backend/c_landing/ListLanding');
	}

}//class
