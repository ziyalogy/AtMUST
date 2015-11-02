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
<?php $this->genBlockBegin ($block) ?>

<?php if (($jamenu = $this->loadMenu())) $jamenu->genMenu (); ?>
<!-- jdoc:include type="menu" level="0" / -->

<?php $this->genBlockEnd ($block) ?>

<?php if ($this->hasSubmenu() && ($jamenu = $this->loadMenu())) : ?>
<div id="ja-subnav" class="wrap">
  <div class="main clearfix">
<?php $jamenu->genMenu (1); ?>
<!-- jdoc:include type="menu" level="1" / -->
</div>
</div>
<?php endif;?>



<ul class="no-display">
    <li><a href="<?php echo $this->getCurrentURL();?>#ja-content" title="<?php echo JText::_("SKIP_TO_CONTENT");?>"><?php echo JText::_("SKIP_TO_CONTENT");?></a></li>
</ul>
