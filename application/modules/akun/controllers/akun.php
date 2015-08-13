<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akun extends MX_Controller {

	 function Akun()
	{
		parent::__construct();	
		$this->load->helper('load_controller');
	
		$this->load->helper('load_model');
		
		
		
		
	}
	function daftar()
    {
        $this->load->helper(array('captcha', 'url')) ;
        if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha')))
        {
            $database = array(
								'user_id' => load_model("akun","akun_model","generate_iduser"),
								'username' => $this->input->post('username'), 
								'email' => $this->input->post('email'), 
								'password' => $this->input->post('password'), 
								'status_id' => 0, 
								'aktivasi_kode' => md5($this->input->post('username') . $this->input->post('email')), 
								'no_hp' => $this->input->post('no_hp'),
								'alamat' => $this->input->post('alamat'),
								'input_by' => load_model("akun","akun_model","generate_iduser"),
								'input_date' => date('Y-m-d H:i:s')
								) ;
		
            $this->db->insert('users', $database) ;
		// Untuk verifikasi via email
            $this->load->library('email') ;
            $config = array() ;
            $config['charset'] = 'utf-8' ;
            $config['useragent'] = 'Codeigniter' ;
            $config['protocol'] = "smtp" ;
            $config['mailtype'] = "html" ;
            $config['smtp_host'] = "ssl://smtp.gmail.com" ;
            $config['smtp_port'] = "465" ;
            $config['smtp_timeout'] = "400" ;
            $config['smtp_user'] = "anggietriejast@gmail.com" ;
            $config['smtp_pass'] = "uciha" ;
            $config['crlf'] = "\r\n" ;
            $config['newline'] = "\r\n" ;
            $config['wordwrap'] = TRUE ;
            $this->email->initialize($config) ;
            $this->email->from($config['smtp_user']) ;
            $this->email->to($email) ;
            $this->email->subject("Verifikasi Akun") ;
            $this->email->message(
                                 "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>"
                                 . site_url("akun/aktivasi/$database[aktivasi_kode]")) ;
		// end
			
            echo "<script>alert('Registrasi Berhasil, Silahkan Login!!')</script>" ;
            //redirect('akun/masuk', 'refresh') ;
        }
        else
        {
		$this->session->unset_userdata('mycaptcha');
		$this->load->helper('captcha');
		
            $vals = array('img_path' => './captcha/', 
							'img_url' => base_url() . 'captcha/',
							'img_width' => '200', 
							'img_height' => 30, 'border' => 1,
							'word_length' => 4, 
							'pool' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
							'expiration' => 7200
						);
            $cap = create_captcha($vals) ;
            if ($this->input->post()){
                $this->session->set_userdata('mycaptcha', $cap['word']) ;
                $this->session->set_flashdata('message',
                                             'Captcha yang anda masukan salah!!') ;
            
        }
		
		$data_param['image'] = $cap['image'];
		echo load_controller("web","web","web_header",$data_param);
		echo load_controller("web","web","web_open_content",$data_param);
		$this->load->view("akun/daftar",$data_param);
		echo load_controller("web","web","web_close_content",$data_param);
		echo load_controller("web","web","web_footer",$data_param);	
        }
    }


	
	function masuk() {
	
        if ($this->input->post('login'))
        {
            $email = $this->input->post('email') ;
            $password = $this->input->post('password') ;
            $this->db->select('*') ;
            $this->db->from('users') ;
            $this->db->where('email', $email) ;
            $this->db->where('password', $password) ;
            $this->db->where('status_id', 1) ;
            $result = $this->db->limit(1)->get() ;
            $sess_array = array() ;
            if ($result->num_rows() == 1)
            {
                foreach ($result->result() as $row)
                {
                    $sess_array = array('user_id' => $row->user_id, 
										'username' => $row->username,
										'email' => $row->email,
										'password' => $row->password
										);
                    $this->session->set_userdata($sess_array) ;
                    redirect('akun/id/' . $row->user_id, 'refresh') ;
                }
            }
            else
            {
                echo "<script>alert('Username atau Password salah!!')</script>" ;
                redirect('akun/masuk', 'refresh') ;
            }
		}
		    $data_param="";
			echo load_controller("web","web","web_header",$data_param);
			echo load_controller("web","web","web_open_content",$data_param);
			$this->load->view("akun/masuk",$data_param);
			echo load_controller("web","web","web_close_content",$data_param);
			echo load_controller("web","web","web_footer",$data_param);
	}
	
	function aktivasi(){
		    $data_param="";
			echo load_controller("web","web","web_header",$data_param);
			echo load_controller("web","web","web_open_content",$data_param);
			//$this->load->view("akun/aktivasi",$data_param);
			echo load_controller("web","web","web_close_content",$data_param);
			echo load_controller("web","web","web_footer",$data_param);
	}
	
	function index()
	{
		$data_param="";
		
		$this->web_header($data_param);
		//$this->web_slider_front($data_param);
		$this->web_open_content($data_param);
		//$this->web_premium_lelang($data_param);
		//$this->web_feature_lelang($data_param);
		$this->web_close_content($data_param);
		$this->web_footer($data_param);
		
	}
	
	function id($id)
	{
		$data_param="";
		
		$this->web_header($data_param);
		//$this->web_slider_front($data_param);
		$this->web_open_content($data_param);
		$this->load->view('profil', $data_param);
		//$this->web_feature_lelang($data_param);
		$this->web_close_content($data_param);
		$this->web_footer($data_param);
		
	}
	function web_header($data_param) {
		$data_param="";
		return $this->load->view("web/header",$data_param);
	}
	function web_footer($data_param) {
		$data_param="";
		return $this->load->view("web/footer",$data_param);
	}
	
	function web_slider_front($data_param) {
		$data_param['get_list_categori'] = load_model("web","web_model","get_list_categori");
		return $this->load->view("web/slider_front",$data_param);
	}
	function web_premium_lelang($data_param) {
		$data_param="";
		return $this->load->view("web/premium_lelang",$data_param);
	}
	function web_feature_lelang($data_param) {
		$data_param="";
		return $this->load->view("web/feature_lelang",$data_param);
	}
	function web_open_content($data_param) {
		$data_param="";
		return $this->load->view("web/open_content",$data_param);
	}
	function web_close_content($data_param) {
		$data_param="";
		return $this->load->view("web/close_content",$data_param);
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
