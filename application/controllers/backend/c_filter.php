<?php class c_filter extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backend/m_filter');
		$this->load->model('backend/m_product');
		$this->load->model('backend/m_news');
		$this->load->model('backend/m_project');
	}

	public function FillProduct(){
		$data['Name'] = $this->input->post('name');
		$data['Catalog'] = $this->m_filter->GetNameParent($this->input->post('catalog'));
		$data['Hot'] = $this->input->post('hot');
		$data['Status'] = $this->input->post('status');
		$data['ListProduct'] = $this->m_filter->FillProduct();
		if($data['Name']==''&&$data['Catalog']==''&&$data['Hot']==''&&$data['Status']=='') {
			redirect('backend/c_product/ListProduct');
		}else{
			$this->load->view('backend/home',$data);
		}
	}

	public function FillNews(){
		$data['Name'] = $this->input->post('name');
		$data['Catalog'] = $this->m_filter->GetNewsParent($this->input->post('catalog'));
		$data['Hot'] = $this->input->post('hot');
		$data['Status'] = $this->input->post('status');
		$data['ListNews'] = $this->m_filter->FillNews();
		if($data['Name']==''&&$data['Catalog']==''&&$data['Hot']==''&&$data['Status']=='') {
			redirect('backend/c_news/ListNews');
		}else{
			$this->load->view('backend/home',$data);
		}
	}

	public function FillProject(){
		$data['Name'] = $this->input->post('name');
		$data['Catalog'] = $this->m_filter->GetProjectParent($this->input->post('catalog'));
		$data['Hot'] = $this->input->post('hot');
		$data['Status'] = $this->input->post('status');
		$data['ListProject'] = $this->m_filter->FillProject();
		if($data['Name']==''&&$data['Catalog']==''&&$data['Hot']==''&&$data['Status']=='') {
			redirect('backend/c_project/ListProject');
		}else{
			$this->load->view('backend/home',$data);
		}
	}

}//class
