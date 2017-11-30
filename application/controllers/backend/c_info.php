<?php class c_info extends CI_Controller { 
	public $lang='vi';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_info');
	}
	public function ListIntro() {
		$data['Intro'] = $this->m_info->ListIntro();
		$this->load->view('backend/home',$data);
	}

	public function EditIntro() {
		$data['editor'] = $this->tinymce();
		$data['Intro'] = $this->m_info->ListIntro();
		$this->load->view('backend/home',$data);
	}

	public function UpdateIntro() {
		$this->m_info->UpdateIntro();
		redirect('backend/c_info/ListIntro');
	}

	public function ListContact(){
		$data['Contact'] = $this->m_info->ListContact();
		$this->load->view('backend/home',$data);
	}

	public function EditContact(){
		$data['Contact'] = $this->m_info->ListContact();
		$this->load->view('backend/home',$data);
	}

	public function UpdateContact(){
		$this->m_info->UpdateContact();
		redirect('backend/c_info/ListContact');
	}

	public function ListMap(){
		$data['Map'] = $this->m_info->ListMap();
		$this->load->view('backend/home',$data);
	}

	public function EditMap(){
		$data['Map'] = $this->m_info->ListMap();
		$this->load->view('backend/home',$data);
	}

	public function UpdateMap(){
		$this->m_info->UpdateMap();
		redirect('backend/c_info/ListMap');
	}

	public function ListSocial(){
		$data['Social'] = $this->m_info->ListSocial();
		$this->load->view('backend/home',$data);
	}

	public function EditSocial(){
		$data['Social'] = $this->m_info->ListSocial();
		$this->load->view('backend/home',$data);
	}

	public function UpdateSocial(){
		$this->m_info->UpdateSocial();
		redirect('backend/c_info/ListSocial');
	}

}//class
