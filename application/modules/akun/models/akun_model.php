<?php
class Akun_model extends CI_Model
	{
		var $DB;
		 public function Akun_model()
		 {
		  parent::__construct();
		  $CI =& get_instance();
			 $this->instan=$CI;
			  $this->DB = $this->load->database('home', TRUE);
		  
		
		 } 
		 
		function generate_iduser($data_param)
		{
			$date = date('ymd');
			$q = $this->DB->query("SELECT max(right(user_id, 5)) as user_id FROM users WHERE mid(user_id, 2, 6) = '$date'")->result();
			foreach ( $q as $d ){
				$dt1 = 1 + $d->user_id;
				$dt = sprintf("%05s", $dt1);
				return "u" . $date . $dt;
			}
		}		
	}
?>
