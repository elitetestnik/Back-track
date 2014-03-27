<?php
defined ('_JEXEC') or die('Restricted access');

/**
 *
 * @package    VirtueMart
 * @subpackage Plugins  - Elements
 * @author ValÃ©rie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */


class JElementPaypalpaymentspro3dsscCurl extends JElement
{

    /**
     * Element name
     * @access	protected
     * @var		string
     */
   var $_name = 'paypalpaymentspro3dssccurl';

    function fetchElement($name, $value, &$node, $control_name)
    {
	// $class = $node->attributes( 'class' ) ? $node->attributes( 'class' ) : "text_area";
 
	//$return = '<input type="text"' .
	//'name="' . $control_name . '[' . $name . ']"' .
	//'id="'   . $control_name . '[' . $name . ']"' .
	//'value="' . $value . '"' .
	//'class="' . $class . '" />';
	           
    $return = '';
    
    if (!function_exists ('curl_init') or !function_exists ('curl_exec'))
		{
		$return = JText::_ ('<span style="color: #FF0000">The PHP Curl Library is not installed on this server.<br/><br/>This is required by the plugin.<br/><br/>Please contact your hosting user support to install PHP Curl on this server<br/><br/></span>');
		}
	else
		{
		//$return = JText::_ ('<span style="color: #FF0000">Curl Library is Installed.<br/><br/></span>');
		$return = '';
		}
      
    return $return;
    }

}
