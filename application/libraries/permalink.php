<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permalink {
  
    function __construct(){
        $CI =& get_instance();
		$this->instan=$CI;
    
       
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

}