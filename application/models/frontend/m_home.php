<?php
	class m_home extends CI_model{
		function __construct(){        
		parent::__construct();
		$this->load->library('Session');
		$this->load->database();
		}  //function construct

		public function slider(){
			$sql = "SELECT * FROM slider WHERE Slider_Status=1 ORDER BY Slider_Order";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function Catalog(){
			$sql = "SELECT * FROM product_catalog WHERE Product_Catalog_Status=1 AND Product_Catalog_Hot=1  ORDER BY Product_Catalog_Order";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function Title(){
			$sql = "SELECT Title FROM config";
			$query = $this->db->query($sql);
			$row = $query->row();
			return $row->Title;
		}

		public function Keyword(){
			$sql = "SELECT Keyword FROM config";
			$query = $this->db->query($sql);
			$row = $query->row();
			return $row->Keyword;
		}

		public function Description(){
			$sql = "SELECT Description FROM config";
			$query = $this->db->query($sql);
			$row = $query->row();
			return $row->Description;
		}

		public function sidebar(){
			$sql="SELECT *  FROM product_catalog WHERE Product_Catalog_ID_Parent=0 AND Product_Catalog_Status=1 ORDER BY Product_Catalog_Order";
			$query = $this->db->query($sql);
			$query = $query->result_array();
			$catalog = array();
			$catalog = $query;
			foreach ($catalog as &$key) {
				$params = $key['Product_Catalog_ID'];
				$sql="SELECT *  FROM product_catalog WHERE Product_Catalog_ID_Parent=$params AND Product_Catalog_Status=1 ORDER BY Product_Catalog_Order";
				$query = $this->db->query($sql);
				$query = $query->result_array();
				$key['child'] = $query;
			}
			return $catalog;
		}

		public function Newproduct(){
			$sql = "SELECT * FROM product WHERE Product_Status=1  ORDER BY Product_Date DESC LIMIT 6";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function Newnews(){
			$sql = "SELECT * FROM news WHERE News_Status=1  ORDER BY News_Date DESC LIMIT 6";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function Hotproduct(){
			$sql = "SELECT * FROM product WHERE Product_Status=1  AND Product_Hot=1 ORDER BY Product_Date DESC LIMIT 6";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function Phukien(){
			$sql = "SELECT * FROM product WHERE Product_Status=1  AND Product_Catalog_ID=17 ORDER BY Product_Date DESC LIMIT 6";
			$query = $this->db->query($sql);
			return $query->result_array();
		}


		public function Khuyenmai(){
			$sql = "SELECT * FROM product WHERE Product_Status=1  AND Product_Price_Before!=0 ORDER BY Product_Date DESC LIMIT 6";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

	}
?>