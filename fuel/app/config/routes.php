<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Default route
	 * -------------------------------------------------------------------------
	 *
	 */

	'_root_' => 'welcome/index',

	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */

	'_404_' => 'welcome/404',

	/**
	 * -------------------------------------------------------------------------
	 *  Example for Presenter
	 * -------------------------------------------------------------------------
	 *
	 *  A route for showing page using Presenter
	 *
	 */

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

	//Controller_Employeeのaction_show()を呼び出し
	'test' => 'employee/show',

	//Routes GET/employee to/employee/all and POST/employee to/employee/create
	'employee' => array(array('GET', new Route('employee/all')), array('POST', new Route('employee/create'))),

	//e.g. http://localhost:3000/public/employee/request/Jon
	'employee/request(/:name)?' => array('employee/request', 'name' => 'name'),
);
