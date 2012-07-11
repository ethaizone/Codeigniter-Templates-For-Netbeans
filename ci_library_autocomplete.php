<?php 

if (!defined('BASEPATH')) 
	exit('No direct script access allowed');

/**
 * ${name?capitalize}
 * 
 * Description...
 * 
 * @package ${name}
 * @author ${user} <your@email.com>
 * @version 0.0.0
 */
class ${name?capitalize} {

	private $CI = '';

	/**
	 * Constructor function
	 *
	 * @return ${name?capitalize} 
	 */
	public function __construct()
	{
		$this->CI =& get_instance();

		// load ${name} config
		$this->CI->load->config('${name}',TRUE);
		// load ${name}_model
		$this->CI->load->model('${name}_model');
		
		return $this;
	}    


}

/* End of file ${nameAndExt} */
/* Location: ./application/libraries/${nameAndExt} */