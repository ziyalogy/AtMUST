<?php
/**
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

// No direct access
defined('_JEXEC') or die;
?>
<?php
//detect view on mobile - show switch to mobile tools
$layout_switcher = $this->loadBlock('usertools/layout-switcher');
if ($layout_switcher) {
    $layout_switcher = '<li class="layout-switcher">'.$layout_switcher.'</li>';
}
?>
<div class="ja-breadcrums">
    <jdoc:include type="module" name="breadcrumbs" />
</div>