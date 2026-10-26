<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>?v=<?php echo @filemtime(__DIR__ . '/style.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>
<div class="bg-overlay"></div>

<!-- 导航栏：结构与主页逐字相同，只保留「← 回到主页」 -->
<nav class="navbar">
    <div class="container">
        <div class="logo">✦ Starweaver</div>
        <div class="nav-links">
            <a href="/" style="color:var(--primary);font-weight:600;">← 回到主页</a>
        </div>
    </div>
</nav>
