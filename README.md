# 星际织梦 · 个人主页

## 网页简介

这是我的个人主页网站，展示我的技能、作品和联系方式。网站采用响应式设计，支持明暗主题切换，使用纯 HTML/CSS/JavaScript 构建，无框架依赖。

## 功能说明

### 导航栏
- **Logo**： Starweaver 文字标识
- **导航链接**：关于、技能、作品、联系
- **主题切换按钮**：/☀️ 一键切换明暗主题，偏好自动保存到本地

### 各板块功能

| 板块 | 内容 | 交互 |
|:---|:---|:---|
| **Hero 首屏** | 名字、副标题、标签、按钮 | 向下滚动进入下一屏 |
| **关于我** | 个人介绍、数据统计 | 滚动时元素淡入动画 |
| **会啥（技能）** | 6 个技能条（C++、铁路数据查询等） | 进度条动画 |
| **搞过的东西（作品）** | 6 个项目卡片 | 卡片悬浮上浮效果 |
| **找我（联系）** | Steam、B站、QQ 等联系方式 | 点击跳转 |

### 作品列表

1. **蓝桥杯省三** — 算法竞赛省级三等奖
2. **徐州东列车时刻表** — 爬取高铁数据做时刻表
3. **Starweaver 博客** — Typecho 主题全手写，毛玻璃风格
4. **MOSS 机器人** — 多通道 QQ 机器人，多模型切换
5. **课表提醒系统** — 自动推送课表，cron 定时任务
6. **原神千星奇域高校奇匠** — 原神官方合作活动

### 技术栈
- 纯 HTML5 + CSS3 + JavaScript
- CSS 变量实现明暗主题
- IntersectionObserver 实现滚动动画
- localStorage 保存主题偏好

## 使用方法

1. 直接用浏览器打开 `index.html` 即可访问
2. 点击右上角 🌙/☀️ 按钮切换明暗主题
3. 滚动页面浏览各板块内容
4. 点击导航链接跳转到对应板块
5. 点击作品卡片可查看项目详情（部分项目有外部链接）

## 部署

- GitHub Pages: https://xjzmstar.github.io/xjzm.github.io/
- 自定义域名: https://xjzmstar.top/

## 版本历史

- **v1.0** — 初始版本，4 个作品板块
- **v2.0** — 作品板块扩充至 6 个，新增博客/机器人/课表项目，添加 README 和制作过程档案
- **v3.0** — 完整网站上传（主页 + 博客主题 starweaver + 背景图 bg.jpg），去除备案内容

## 仓库结构

```
xjzm.github.io/
├── index.html              # 主页（6 个作品展示）
── bg.jpg                  # 网站背景图
├── blog-theme/             # Typecho 博客主题（starweaver）
│   ├── 404.php
│   ├── comments.php
│   ├── footer.php
│   ├── functions.php
│   ├── header.php
│   ├── index.php
│   ├── page.php
│   ├── post.php
│   ├── sidebar.php
│   ├── style.css
│   ├── logo.png
│   └── images/
│       └── gongan.jpg
├── README.md               # 本文件（制作说明）
└── 制作过程档案.md          # Prompt 日志（5 轮迭代记录）
```
