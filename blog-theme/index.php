<?php
/**
 * Starweaver - 博客首页（文章列表）
 * 结构从主页搬来：section.page(page-inner) + 毛玻璃卡片
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content">
<section class="page" id="home">
    <div class="page-inner">
        <h2 class="section-title fade-in">博客</h2>
        <p class="section-desc fade-in delay-1">分享一些日常 · 代码、卡车与火车</p>

        <div class="blog-grid">
            <aside class="sidebar">
                <?php $this->need('sidebar.php'); ?>
            </aside>

            <div class="post-list">
            <?php if ($this->have()): ?>
                <?php while ($this->next()): ?>
                <article class="post-card fade-in">
                    <h2><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h2>
                    <div class="post-meta">
                        <span>📅 <?php $this->date('Y-m-d'); ?></span>
                        <span>👤 <?php $this->author(); ?></span>
                        <span>📁 <?php $this->category(','); ?></span>
                        <span>💬 <?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></span>
                    </div>
                    <div class="post-excerpt"><?php $this->excerpt(120, '...'); ?></div>
                    <a href="<?php $this->permalink(); ?>" class="read-more">阅读全文 →</a>
                </article>
                <?php endwhile; ?>
            <?php else: ?>
                <article class="post-card fade-in">
                    <h2>还没有文章</h2>
                    <div class="post-excerpt">这儿空空如也，等我写点什么吧。</div>
                </article>
            <?php endif; ?>
            </div>
        </div>

        <div class="page-nav fade-in">
            <?php $this->pageNav('← 上一页', '下一页 →'); ?>
        </div>
    </div>
</section>
</div>

<?php $this->need('footer.php'); ?>
