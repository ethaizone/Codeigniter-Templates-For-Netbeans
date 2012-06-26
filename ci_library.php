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

	/**
	 * Constructor function
	 *
	 * @return ${name?capitalize} 
	 */
	public function __construct()
	{
		// load ${name} config
		$this->load->config('${name}',TRUE);
		// load ${name}_model
		$this->load->model('${name}_model');
		
		return $this;
	}

       /**
        * __call
        * 
        * call method from content model
        *
        **/
	public function __call($method, $arguments)
	{
		if (!method_exists( $this->${name}_model, $method) )
		{
			throw new Exception('Undefined method ${name?capitalize}::' . $method . '() called');
		}

		return call_user_func_array( array($this->${name}_model, $method), $arguments);
	}
        
        
	/**
	 * __get
	 * 
	 * Enables the use of CI super-global without having to define an extra variable.
	 * 
	 *
	 * @access	public
	 * @param	$var
	 * @return	mixed
	 */
	public function __get($var)
	{
		return get_instance()->$var;
	}      


}

/* End of file ${nameAndExt} */
/* Location: ./application/libraries/${nameAndExt} */