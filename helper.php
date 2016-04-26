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
 * Helper for jmodule
 *
 * @package     Joomla.Module Template
 * @subpackage  mod_name
 *
 * @since       3.1
 */
abstract class ModJModuleHelper
{
	/**
	 * Get a list of object
	 *
	 * @param   \Joomla\Registry\Registry  &$params  объект содержащий параметры модуля
	 *
	 * @return  mixed
	 *
	 * @since 3.1
	 */
	public static function getList(&$params)
	{
		$app = JFactory::getApplication();
		//TODO: Include your code ...
		
		$items = null;
		return $items;
	}
}
