<?php
/*
* 2007-2016 RedHost
*
* NOTICE OF LICENSE
*
* This source file is subject to the free software license (OSL 3.0)
* Who is included with this package in the LICENSE.txt file.
* It is also available through the world-wide-web at this URL:
* Http://opensource.org/licenses/osl-3.0.php
* If you do not receive a copy of the license and are unable to
* Get the world-wide-web, please send an email
* At contact@redweb.tn~~V so we can send you a copy immediately.
*
* Disclaimer
*
* Do not modify or add to this file if you want to update to the latest RedHost
* The versions in the future. If you want to customize for your PrestaShop
* Needs please refer to http://www.redweb.tn for more information.
*
*	author Sabri El Gederite SX <contact@sabri-elgueder.tn>
*	Copyright 20010-2016 RedHost
*	license Http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*	International Trademark and property RedWeb
*/


// Require base defines
require_once realpath('./defines.inc.php');

if (!$sx_path['config.file']) {
	require_once _SX_ROOT_DIR_ . "/sx-app/install.php";
} else {
	require_once _SX_ROOT_DIR_ . "/sx-app/app.php";	
}
