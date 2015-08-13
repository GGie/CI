<?php
class Web_model extends CI_Model
	{
	
    public function __construct()
    {
		parent::__construct();	
    }

		
		function get_list_premium_lelang($data_param)
		{
			$skr = date('Y-m-d H:i:s');
			$q = $this->db->query("SELECT a.*, b.produk_nama, 
								(SELECT c.gambar_url FROM gambar c 
								WHERE c.produk_id=a.produk_id 
								AND c.utama=1 limit 1) as gambar_url
								FROM proses_lelang a
								INNER JOIN produk b 
								ON a.produk_id=b.produk_id
								AND a.kategori_id=b.kategori_id
								WHERE a.status_id='1'
								AND a.premium = '1'
								AND (a.waktu_mulai <= '$skr' 
								AND a.waktu_akhir >= '$skr'
								)");
		return $q;
			
		}

		function get_list_categori($data_param)
		{
				$q = $this->db->query("SELECT * from kategori");
				return $q;
		}
		
		function get_list_module($data_param)
		{
			
			$q=$this->DB->query("SELECT * from web_module where position_id='".$data_param['position_id']."' and status_id='1' order by urut");
			
		
			return $q;
		}
		function get_web_main($data_param)
		{
			
			$q=$this->DB->query("SELECT * from web_main where id='1'");
			
		
			return $q;
		}
		function get_position($data_param)
		{
			
			$q=$this->DB->query("select * from web_position");
			
		
			return $q;
		}
		
		
		
	}
?>
