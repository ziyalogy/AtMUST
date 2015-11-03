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
defined('_JEXEC') or die('Restricted access');
?>
<div id="ja-ss-<?php echo $module->id;?>" class="ja-ss<?php echo $params->get( 'moduleclass_sfx' );?> ja-ss-wrap <?php echo $type; ?>"  style="visibility: hidden">
	<div class="ja-ss-items">
	<?php
	for ($i=0; $i< count($images); $i++):
	?>
		<div class="ja-ss-item">
			<img src="<?php echo $images[$i];?>" alt="<?php echo str_replace('"', '"/', strip_tags($captionsArray[$i]) );?>"/>
			<?php
			 if(strlen(trim($captionsArray[$i]))):
			?>
			<div class="ja-ss-desc"><?php echo $captionsArray[$i] ?></div>
			<?php
			endif;
			?>
		</div>
	<?php
	endfor;
	?>
	</div>
	
	<?php
	if ($showThumbnail == 1):
	?>
	<div class="ja-ss-thumbs-wrap">
		<div class="ja-ss-thumbs">
		<?php
		for ($i=0;$i<count($images); $i++):
		?>
			<div class="ja-ss-thumb">
				<img src="<?php echo $thumbArray[$i]?>" alt="Photo Thumbnail" />
			</div>
		<?php
		endfor;
		?>
		</div>
	</div>
	<?php 
	endif;
	?>
	<?php
	if ($showNavigation):
	?>
	<div class="ja-ss-btns clearfix">
		<span class="ja-ss-prev">&laquo; <?php echo JText::_('PREVIOUS');?></span>
		<span class="ja-ss-next"><?php echo JText::_('NEXT');?>  &raquo;</span>
	</div>
	<?php
	endif;
	?>
</div>