<?php
/**
 * @package     Joomla.Module.Template
 * @subpackage  mod_name
 *
 * @copyright   Copyright (C) 2015 Grigorchuk Aleksandr. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list            = ModNameHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_articles_news', $params->get('layout', 'default'));