<?php
/**
 * Starweaver - 侧边栏（位于左侧，与主页 .about-card 同款毛玻璃）
 * 注：「其它」区块已按需求移除，不再提供。
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$sidebar = $this->options->sidebarBlock;
if (empty($sidebar)) {
    // 后台未保存配置时的默认回退
    $sidebar = ['ShowRecentPosts', 'ShowCategory', 'ShowTag', 'ShowArchive'];
}
?>

<!-- 个人卡 -->
<div class="widget fade-in">
    <h3 class="center">星舰驻提瓦特办事处</h3>
    <p class="center muted">征途漫漫，以梦为马；唯有奋斗，不负韶华</p>
</div>

<?php if (!empty($sidebar) && in_array('ShowRecentPosts', $sidebar)): ?>
<div class="widget fade-in">
    <h3>最新文章</h3>
    <ul>
        <?php \Widget\Contents\Post\Recent::alloc()->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
</div>
<?php endif; ?>

<?php if (!empty($sidebar) && in_array('ShowCategory', $sidebar)): ?>
<div class="widget fade-in">
    <h3>分类</h3>
    <ul>
        <?php \Widget\Metas\Category\Rows::alloc()->to($cats); ?>
        <?php while ($cats->next()): ?>
        <li><a href="<?php $cats->permalink(); ?>"><?php $cats->name(); ?> (<?php $cats->count(); ?>)</a></li>
        <?php endwhile; ?>
    </ul>
</div>
<?php endif; ?>

<?php if (!empty($sidebar) && in_array('ShowTag', $sidebar)): ?>
<div class="widget fade-in">
    <h3>标签</h3>
    <div class="tag-cloud">
        <?php \Widget\Metas\Tag\Cloud::alloc('limit=20')->parse('<a href="{permalink}">{name}</a>'); ?>
    </div>
</div>
<?php endif; ?>

<?php if (!empty($sidebar) && in_array('ShowArchive', $sidebar)): ?>
<div class="widget fade-in">
    <h3>归档</h3>
    <ul>
        <?php \Widget\Contents\Post\Date::alloc('type=month&format=Y年n月')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
    </ul>
</div>
<?php endif; ?>
