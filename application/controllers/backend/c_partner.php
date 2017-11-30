<?php class c_partner extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_partner');
	}

	public function ListPartner(){
		$data['ListPartner'] = $this->m_partner->ListPartner();
		$this->load->view('backend/home',$data);
	}

	public function AddPartner(){
		$this->load->view('backend/home');
		if(isset($_POST['submit'])){
			$this->m_partner->AddPartner();
			redirect('backend/c_partner/ListPartner');
		}
	}

	public function DeletePartner($params){
		$this->m_partner->DeletePartner($params);
		redirect('backend/c_partner/ListPartner');
	}

	public function DetailPartner(){
		$params = $this->uri->segment(4);
		$data['DetailPartner'] = $this->m_partner->DetailPartner($params);
		$this->load->view('backend/home',$data);
	}

	public function UpdatePartner(){
		$params = $this->uri->segment(4);
		$this->m_partner->UpdatePartner($params);
		redirect('backend/c_partner/ListPartner');
	}

}//class
