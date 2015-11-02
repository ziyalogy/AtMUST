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
<div class="ja-masshead" <?php if(isset($masshead['params']['background'])): ?> style="background-image: url(<?php echo $masshead['params']['background'] ?>)" <?php endif; ?>>
<h3 class="ja-masshead-title"><span><?php echo $masshead['title']; ?></span></h3>
<div class="ja-masshead-desc"><span><?php echo $masshead['description']; ?></span></div>
</div>