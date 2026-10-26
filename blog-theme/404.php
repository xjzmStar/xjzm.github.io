<?php
/**
 * Starweaver - 404
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content">
<section class="page" id="home">
    <div class="page-inner">
        <div class="page-404">
            <h1>404</h1>
            <p>这个页面不在服务区，可能飞到提瓦特去了</p>
            <a href="/" class="btn">← 回到主页</a>
        </div>
    </div>
</section>
</div>

<?php $this->need('footer.php'); ?>
