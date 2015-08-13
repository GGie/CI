<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Web_function {
  
    function __construct(){
		
        $CI =& get_instance();
		$this->instan=$CI;
     $this->instan->load->helper('load_model');
	
	
       //session_start();
    }
	function index() {
		
	}
	function set_permalink($content)
	{
		$karakter = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');
		$s = strtolower(str_replace($karakter,"",$content));
		$link = strtolower(str_replace(' ', '-', $s));
		return $link;
	}
	function cek_permalink($id,$str) {
			 
			$url1=$this->set_permalink($str);
		
			return $id."-".$url1;
			
		}

							
					 

}