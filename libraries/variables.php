<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Variables addon
 *
 * Set variables in your layout file or anywhere throughout Mojo Regions then
 * use them again anywhere.
 *
 * @package		MojoMotor
 * @subpackage	Addons
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/mojomotor/variables
 */
class Variables
{
	public $addon;
	public $addon_version = '1.0';

	private $_variables = array();

	// --------------------------------------------------------------------

	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */
	function __construct()
	{
		$this->addon =& get_instance();
	}

	// --------------------------------------------------------------------

	/**
	 * Set
	 *
	 * Set a variable.
	 *
	 * @access	public
	 * @param	array
	 * @return	string
	 */
	function set($template_data = array())
	{
		$params =& $template_data['parameters'];

		if ( ! isset($params['name']) OR ! isset($params['value']))
		{
			return;
		}

		$this->_variables[$params['name']] = $params['value'];
	}

	// --------------------------------------------------------------------

	/**
	 * Set
	 *
	 * Set a variable.
	 *
	 * @access	public
	 * @param	array
	 * @return	string
	 */
	function get($template_data = array())
	{
		$params =& $template_data['parameters'];

		if ( ! isset($params['name']))
		{
			return;
		}

		return $this->_variables[$params['name']];
	}

}

/* End of file robots.php */
/* Location: system/mojomotor/third_party/robots/libraries/robots.php */