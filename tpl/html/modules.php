<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * beezDivision chrome.
 *
 * @since   3.0
 */
function modChrome_trpFBlink($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="fb-logo-div">
		<?php echo $module->content; ?></div>
	<?php endif;
}