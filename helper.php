<?php
/**
 * @package     Joomla.Module.Template
 * @subpackage  mod_name
 *
 * @copyright   Copyright (C) 2015 Grigorchuk Aleksandr. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_name
 *
 * @package     Joomla.Module Template
 * @subpackage  mod_name
 *
 * @since       3.0
 */
abstract class ModNameHelper
{
	/**
	 * Get a list of object
	 *
	 * @param   \Joomla\Registry\Registry  &$params  object holding the models parameters
	 *
	 * @return  mixed
	 *
	 * @since 3.0
	 */
	public static function getList(&$params)
	{
		$app = JFactory::getApplication();
		//TODO: Include your code ...
		
		$items = null;
		return $items;
	}
}
