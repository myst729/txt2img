txt2img (山寨长微博)
====================

Contributors: Leo Deng ([@米粽粽](http://weibo.com/myst729))  
Plugin URI: http://forcefront.com/txt2img-plugin/  
Tags: txt2img, weibo  
Requires at least: 2.7.0  
Tested up to: 3.5.1  
Stable tag: 1.2.0  
Author URI: http://forcefront.com/  
Donate link: http://me.alipay.com/myst  
License: GPLv2 or later

Convert WordPress post/page into image and share on Weibo.


###Description###

Convert WordPress post/page into image and share on [Weibo](http://weibo.com/).

把 WordPress 文章/页面转成图片发送到[新浪微博](http://weibo.com/)。


###Installation###

1. Upload the plugin to your `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Now you could see the txt2img meta box while editing published post/page.

上传插件到您的 WordPress 插件目录，登录后台激活即可。进入文章编辑界面，如果当前文章的发布状态是“公开发布”，您就会在右侧看到分享长微博的选项。


###Frequently Asked Questions###

Looking forward to your questions.

期待您的提问。


###Known issues###

If your WordPress is running on a Windows Server, the font file will be locked once you start using this plugin, until the server reboots. This may cause plugin auto-updating fail. The issue couldn't be solved due to Windows system design. Please update it manually, or try a *nix server.

如果您在 Windows 服务器上运行 WordPress，使用本插件会造成字体文件被锁死，直到服务器重启。这将可能造成插件自动更新失败。由于 Windows 系统设计的原因，该问题无法修复。请手动更新该插件，或考虑更换 *nix 架构的服务器。


###Donation###

If you like this plugin and want to thank its developer, you may consider make a donation via [**AliPay**](https://me.alipay.com/myst).

如果您觉得这个插件还不错，想对开发者表示感谢，可以考虑通过 [**支付宝个人收款页**](https://me.alipay.com/myst) 打赏开发者一点儿银子。  
[![I want a Macbook Pro!](https://img.alipay.com/sys/personalprod/style/mc/btn-index.png)](https://me.alipay.com/myst)


###Screenshots###

1. Share to weibo while editing published post/page. 在编辑界面分享图片长微博。
2. Preview the image generated from the post. 预览生成的长微博图片。


###Changelog###

= 1.2.0 (2013-04-14) =
* 增加对 SAE 的支持（感谢 [@pkuxkxjason](http://weibo.com/pkuxkxjason) 的 pull request）

= 1.1.1.1 (2013-04-11) =
* 作者修改了 weibo 昵称~

= 1.1.1 (2013-02-15) =
* 修正对常见 HTML 转义字符的处理

= 1.1.0 (2012-09-20) =
* 增加多语言支持，已提供英文和简体中文两个语种（求其他语种翻译）

= 1.0.8 (2012-09-07) =
* 修正使用可视化编辑器时生成的图片丢失段落间隔行的问题

= 1.0.7 (2012-08-05) =
* 修正一个 IE 排版丢失换行的问题
* 增加仿 Fancybox 外观的长微博图片预览功能

= 1.0.6 (2012-07-27) =
* 增加发布前预览长微博图片的功能

= 1.0.5 (2012-07-24) =
* 改进对文章内容多个连续空行的处理

= 1.0.4 (2012-07-09) =
* 在图片长微博底部为水印留出位置

= 1.0.3 (2012-04-11) =
* 修改微博文字中附加的工具信息

= 1.0.2 (2012-03-18) =
* 修正固定链接（permalink）过长时页面 URL 错误的问题
* 去除几处 URL 中多余的斜杠（/）

= 1.0.1 (2012-02-15) =
* 修正制表符（\t）的排版问题
* 文章标题加粗显示
* 增加页面（page）转换长微博的支持

= 1.0.0 (2012-02-14) =
* 发布第一个版本
* 在 WordPress 中方便的转发排版良好的长微博
