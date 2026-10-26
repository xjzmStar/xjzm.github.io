<?php
/**
 * Starweaver - 文章页
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content">
<section class="page" id="home">
    <div class="page-inner">
        <div class="blog-grid">
            <aside class="sidebar">
                <?php $this->need('sidebar.php'); ?>
            </aside>

            <article class="post-content fade-in">
                <h1><?php $this->title(); ?></h1>
                <div class="post-meta">
                    <span>📅 <?php $this->date('Y-m-d'); ?></span>
                    <span>👤 <?php $this->author(); ?></span>
                    <span>📁 <?php $this->category(','); ?></span>
                    <span>💬 <?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></span>
                </div>
                <div class="post-body">
                    <?php $this->content(); ?>
                </div>
                <div class="post-tags">
                    <?php $this->tags(' ', true, ''); ?>
                </div>
                <div class="post-nav">
                    <span><?php $this->thePrev('← %s', '没有上一篇了'); ?></span>
                    <span><?php $this->theNext('%s →', '没有下一篇了'); ?></span>
                </div>
            </article>
        </div>

        <?php $this->need('comments.php'); ?>
    </div>
</section>
</div>

<?php $this->need('footer.php'); ?>
