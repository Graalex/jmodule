<?php
/**
 * @package     Joomla.Module
 * @subpackage  mod_jmodule
 *
 * @copyright   Copyright (C) 2015 Grigorchuk Aleksandr.
 * @license     MIT License; see LICENSE
 * @since       3.1
 */

defined('_JEXEC') or die;

/**
 * Вспомогательный класс для модуля
 */
abstract class ModJModuleHelper
{
	/**
	 * Получить список объектов
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
		// Добавте свой код ...
		
		$items = null;
		return $items;
	}
}
