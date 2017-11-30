<?php class c_cart extends CI_Controller { 
	public function __construct(){
		parent::__construct();
    $this->load->helper('url');
		$this->load->model('frontend/m_cart');
		$this->load->library('cart');
    $this->load->model('frontend/m_header');
    $this->load->model('frontend/m_footer');
    $this->load->model('frontend/m_home');
	}

  function index(){
    $data['Title'] = $this->m_home->Title().' | Giỏ hàng';
    $data['Keyword'] = $this->m_home->Keyword();
    $data['Description'] = $this->m_home->Description();
    $this->load->view('frontend/formcart',$data);
  }

	function Add(){
    $data['Title'] = $this->m_home->Title();
    $data['Keyword'] = $this->m_home->Keyword();
    $data['Description'] = $this->m_home->Description();
    $insert_data = array(
     'id'      => $this->uri->segment(3),
     'qty'     => 1,
     'price'   => $this->uri->segment(4),
     'name'    => $this->m_cart->ProductName($this->uri->segment(3)),
     'options' => array( 0 => $this->m_cart->ProductImage($this->uri->segment(3)),)
    );
    $this->cart->insert($insert_data);
    //$this->cart->destroy();
    $this->load->view('frontend/formcart',$data);
	}

  function Remove(){
    $data['Title'] = $this->m_home->Title();
    $data['Keyword'] = $this->m_home->Keyword();
    $data['Description'] = $this->m_home->Description();
    $params = $this->uri->segment(4);
    if ($params==="all")
      {
          $this->cart->destroy();
      $this->load->view('frontend/_cart',$data);
      }
    else
      {
        $data = array(
            'rowid' => $params,
            'qty' => 0
        );
        $this->cart->update($data);
      $this->load->view('frontend/_cart',$data);
      }
    }

    function Update(){
      $data['Title'] = $this->m_home->Title();
      $data['Keyword'] = $this->m_home->Keyword();
      $data['Description'] = $this->m_home->Description();
      $insert_data = array(
             'rowid'   => $this->uri->segment(4),
             'qty'     => $this->uri->segment(5),
      );
      $this->cart->update($insert_data);
      $this->load->view('frontend/_cart');
    }

}//class
