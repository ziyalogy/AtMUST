<?php
/*
 * ------------------------------------------------------------------------
 * AtMUST Template for J25 & J32
 * ------------------------------------------------------------------------
 * Copyright (C) 2015 AtMUST. All Rights Reserved.
 *  
 * Author:  AtMUST
 * Websites:  http://www.ziyalogy.xyz -  http://www.buildal.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
*/
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' ); 

if (class_exists('T3Template')) {
	$tmpl = T3Template::getInstance();
	$tmpl->setTemplate($this);
	$tmpl->render();
	return;
} else {
	//Need to install or enable JAT3 Plugin
	echo JText::_('MISSING_JAT3_FRAMEWORK_PLUGIN');
}