<?php
/**
 * @package     Joomla.Module.Template
 * @subpackage  JModule
 * @copyright   2015 (c) Grigorchuk Aleksandr
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
*/

defined('_JEXEC') or die;

// Включть воспомогательные функции
require_once __DIR__ . '/helper.php';

$list = ModJModuleHelper::getList($params);

require JModuleHelper::getLayoutPath('mod_jmodule', $params->get('layout', 'default'));