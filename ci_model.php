<?php 

/**
 * ${name?capitalize}
 * 
 * Description...
 * 
 * @package ${name?replace("_model", "")}
 * @author ${user} <your@email.com>
 * @version 0.0.0
 */

if (!defined('BASEPATH')) 
	exit('No direct script access allowed');

class ${name?capitalize} extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		// load ${name?replace("_model", "")} config
		$this->load->config('${name?replace("_model", "")}',TRUE);
	}

}

/* End of file ${nameAndExt} */
/* Location: ./application/models/${nameAndExt} */