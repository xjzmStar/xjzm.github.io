<?php
/**
 * Starweaver - 独立页面
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

            <article class="page-content fade-in">
                <h1 class="section-title"><?php $this->title(); ?></h1>
                <div class="post-body">
                    <?php $this->content(); ?>
                </div>
            </article>
        </div>

        <?php $this->need('comments.php'); ?>
    </div>
</section>
</div>

<?php $this->need('footer.php'); ?>
