<?php
/**
 * Starweaver Theme Functions
 * 侧边栏位于左侧；「其它」区块已移除，故不再提供对应开关。
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts' => _t('显示最新文章'),
            'ShowCategory'    => _t('显示分类'),
            'ShowTag'         => _t('显示标签'),
            'ShowArchive'     => _t('显示归档')
        ],
        ['ShowRecentPosts', 'ShowCategory', 'ShowTag', 'ShowArchive'],
        _t('左侧栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());
}
