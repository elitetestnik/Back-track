<?php 
/**
* @package   Warp Theme Framework
* @file      js.php
* @version   5.5.16
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright  2007 - 2011 YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// set header
if (extension_loaded('zlib') && !ini_get('zlib.output_compression')) @ob_start('ob_gzhandler');
header('Content-type: application/x-javascript');
header('Cache-Control: max-age=86400');

// include file
if (isset($_GET['id']) && $_GET['id']) {

	$id   = (string) preg_replace('/[^A-Z0-9_\.-]/i', '', $_GET['id']);
	$file = dirname(__FILE__).'/js-'.$id.'.js';

	if (is_file($file)) {
		include($file);
	}
}