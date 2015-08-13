<?php
class General_model extends CI_Model
	{
		var $DB;
		 public function General_model()
		 {
		  parent::__construct();
		  $CI =& get_instance();
			 $this->instan=$CI;
			  $this->DB = $this->load->database('home', TRUE);
		  
		
		 }
		 
		 

		
		
	}
?>
