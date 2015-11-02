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
<script type="text/javascript">
var siteurl='<?php echo JURI::base(true) ?>/';
var tmplurl='<?php echo JURI::base(true)."/templates/".T3_ACTIVE_TEMPLATE ?>/';
var isRTL = <?php echo $this->isRTL()?'true':'false' ?>;
</script>

<jdoc:include type="head" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
<meta name="HandheldFriendly" content="true" />

<?php if (T3Common::mobile_device_detect()=='iphone'):?>
<meta name="apple-touch-fullscreen" content="YES" />
<?php endif;?>

<?php if (T3Common::mobile_device_detect()):?>
<meta name="HandheldFriendly" content="true" />
<?php endif;?>

<link href="<?php echo T3Path::getUrl('images/favicon.png') ?>" rel="shortcut icon" type="image/x-icon" />

<?php JHTML::stylesheet ('', 'templates/system/css/system.css') ?>
<?php JHTML::stylesheet ('', 'templates/system/css/general.css') ?>
