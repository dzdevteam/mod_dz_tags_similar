<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_tags_popular
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<?php JLoader::register('TagsHelperRoute', JPATH_BASE . '/components/com_tags/helpers/route.php'); ?>
<div class="tagssimilar<?php echo $moduleclass_sfx; ?>">
<?php if ($list) : ?>
    <div class="row">
    <?php foreach ($list as $i => $item) : ?>
        <?php
            $link = JRoute::_(TagsHelperRoute::getItemRoute($item->content_item_id, $item->core_alias, $item->core_catid, $item->core_language, $item->type_alias, $item->router));
            $image_src = JUri::root() . 'media/com_dota2/images/dota2/heroes/' . str_replace('-', '_', $item->core_alias) . '_full.png'; // Available: _full, _sb, _hphover, _vert
        ?>
        <div class="col-md-3">
            <?php $item->route = new JHelperRoute; ?>
            <a href="<?php echo $link; ?>" title="<?php echo htmlspecialchars($item->core_title); ?>">
                <img src="<?php echo $image_src; ?>" alt="<?php echo htmlspecialchars($item->core_title); ?>" class="img-responsive img-thumbnail" />
            </a>
        </div>
    <?php endforeach; ?>
    </div>
<?php else : ?>
    <span><?php echo JText::_('MOD_TAGS_SIMILAR_NO_MATCHING_TAGS'); ?></span>
<?php endif; ?>
</div>
