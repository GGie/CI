<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends MX_Controller {

	 function Produk()
	{
		parent::__construct();	
		$this->load->helper('load_controller');
	
		$this->load->helper('load_model');
		
		
		
		
	}
	
	function index()
	{
	
			
		
		
	}
	function lelang() {
		$data_param="";
		$url = $this->uri->segment(3);
		
		$url_1 = explode("-", $url);
		$id = $url_1[0];
		
		$data_detail = load_model("produk","produk_model","get_detail_lelang", array('id' => $id));
				foreach ( $data_detail->result() as $detail ) {
					$produk_id = $detail->produk_id;
				}
		$data_gambar = load_model("produk","produk_model","get_gambar_produk", array('id' => $produk_id));
		
		$data['data_detail'] = $data_detail;
		$data['data_gambar'] = $data_gambar;
			
			echo load_controller("web","web","web_header",$data_param);
			echo load_controller("web","web","web_open_content",$data_param);
			$this->load->view("produk/detail_lelang",$data);
			echo load_controller("web","web","web_close_content",$data_param);
			echo load_controller("web","web","web_footer",$data_param);
	
	}
	function kategori() {
		$data_param="";
		$url = $this->uri->segment(3);
		
		$url_1 = explode("-", $url);
		$id = $url_1[0];
		
		$data_param['data_kategori_lelang'] = load_model("produk","produk_model","get_detail_kategori", array('id' => $id));
			echo load_controller("web","web","web_header",$data_param);
			echo load_controller("web","web","web_open_content",$data_param);
			$this->load->view("produk/detail_kategori",$data_param);
			echo load_controller("web","web","web_close_content",$data_param);
			echo load_controller("web","web","web_footer",$data_param);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
