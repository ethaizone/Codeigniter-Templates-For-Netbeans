<?php 

if (!defined('BASEPATH')) 
	exit('No direct script access allowed');

class ${name?capitalize} extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// load ${name} config
		$this->load->config('${name}');
                // load ${name} library    
                $this->load->library('${name}');		
                
	}
	
	public function index()
	{
		
	}

}

/* End of file ${nameAndExt} */
/* Location: ./application/controllers/${nameAndExt} */