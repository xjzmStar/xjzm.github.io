<?php
/**
 * Starweaver - 评论区（用 Typecho 原生 listComments）
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div class="comments-area fade-in" id="comments">
    <?php $this->comments()->to($comments); ?>

    <?php if ($comments->have()): ?>
        <h3>💬 <?php $this->commentsNum('暂无评论', '仅有一条评论', '已有 %d 条评论'); ?></h3>
        <?php $comments->listComments(); ?>
        <div class="comment-page-nav"><?php $comments->pageNav(); ?></div>
    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="comment-respond">
            <div class="cancel-comment-reply"><?php $comments->cancelReply(); ?></div>
            <h3>发表评论</h3>
            <form method="post" action="<?php $this->commentUrl(); ?>" id="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                    <p class="muted">登录身份：<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> · <a href="<?php $this->options->logoutUrl(); ?>">退出</a></p>
                <?php else: ?>
                    <p><input type="text" name="author" id="author" class="text" placeholder="称呼 *" value="<?php $this->remember('author'); ?>" required /></p>
                    <p><input type="email" name="mail" id="mail" class="text" placeholder="Email<?php if ($this->options->commentsRequireMail): ?> *<?php endif; ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> /></p>
                    <p><input type="url" name="url" id="url" class="text" placeholder="网站 http://" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireUrl): ?> required<?php endif; ?> /></p>
                <?php endif; ?>
                <p><textarea rows="6" name="text" id="textarea" class="textarea" placeholder="说点什么吧 *" required><?php $this->remember('text'); ?></textarea></p>
                <p><button type="submit" class="submit">提交评论</button></p>
            </form>
        </div>
    <?php else: ?>
        <h3>评论已关闭</h3>
    <?php endif; ?>
</div>
