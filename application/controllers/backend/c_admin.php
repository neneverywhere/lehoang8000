<?php class c_admin extends CI_Controller { 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('backend/m_admin');
	}
	public function index() {
		if(!$this->session->userdata('User_ID')) $this->load->view('backend/login');
		else redirect('backend/c_dashboard/DashBoard');
		
	}

	public function CheckLogin(){
		if(isset($_POST['submit'])){
			$data['Login'] = $this->m_admin->CheckLogin();
			if($data['Login'] >= 1){
				$Email = $this->input->post('email');
				$UserData = $this->m_admin->GetUser($Email);
				$this->session->set_userdata($UserData);
				redirect('backend/c_dashboard/DashBoard');
			}
			else{
				$data['error'] = 'Email hoặc mật khẩu chưa đúng. Mời bạn đăng nhập lại';
				$this->load->view('backend/login',$data);
			}
		}
	}

	public function Register(){
		$this->load->view('backend/register');
	}

	public function AddUser(){

		//Kiểm tra email có tồn tại chưa
		$Email = addslashes(stripslashes($this->input->post('email')));
		$CheckEmail = $this->m_admin->CheckEmail($Email);
		echo $CheckEmail;
		if ($CheckEmail > 0){
			$data['error'] = "Email đã được đăng ký, xin chọn email khác";
			$this->load->view('backend/register',$data);
		}else{
			$this->m_admin->AddUser();
			redirect('backend/c_admin');
		}
	}

	public function LogOut(){
		$this->session->sess_destroy();
		redirect('');
	}

	public function ListUser(){
		$data['ListAdmin'] = $this->m_admin->ListUser();
		$this->load->view('backend/home',$data);
	}

	public function DeleteUser($params){
		$this->m_admin->DeleteUser($params);
		redirect('backend/c_admin/ListUser');
	}

	public function DetailUser(){
		$params = $this->uri->segment(4);
		$data['DetailUser'] = $this->m_admin->DetailUser($params);
		$this->load->view('backend/home',$data);
	}

	public function UpdateUser(){
		$params = $this->uri->segment(4);
		$this->m_admin->UpdateUser($params);
		redirect('backend/c_admin/ListUser');
	}

}//class
