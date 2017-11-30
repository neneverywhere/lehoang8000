<?php class c_popup extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_popup');
	}

	public function ListPopup(){
		$data['ListPopup'] = $this->m_popup->ListPopup();
		$this->load->view('backend/home',$data);
	}

	public function AddPopup(){
		$this->load->view('backend/home');
		if(isset($_POST['submit'])){
			$this->m_popup->AddPopup();
			redirect('backend/c_popup/ListPopup');
		}
	}

	public function UpdatePopup(){
		$params=$this->uri->segment(4);
		$this->m_popup->UpdatePopup($params);
		redirect('backend/c_popup/ListPopup');
	}

	public function DeletePopup($params){
		$this->m_popup->DeletePopup($params);
		redirect('backend/c_popup/ListPopup');
	}

	public function DetailPopup(){
		$params=$this->uri->segment(4);
		$data['DetailPopup'] = $this->m_popup->DetailPopup($params);
		$this->load->view('backend/home',$data);
	}
}//class
