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

// если в параметрах модуля установлено обрабатывать плагинами разрешаем обработку
if ($params->def('prepare_content', 1))
{
    JPluginHelper::importPlugin('content');
    $module->content = JHtml::_('content.prepare', $module->content, '', 'mod_jmodule.content');
}

// получаем остальные параметры плагина
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$field1 = htmlspecialchars($params->get('field1', 'jmodule'));

// получаем контент
$list = ModJModuleHelper::getList($params);

require JModuleHelper::getLayoutPath('mod_jmodule', $params->get('layout', 'default'));