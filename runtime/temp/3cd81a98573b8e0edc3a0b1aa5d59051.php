<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"/data/httpd/touzi/public/../application/cms/view/index/index.html";i:1489042526;s:57:"/data/httpd/touzi/application/cms/view/public/layout.html";i:1516507517;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-focus" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="zh"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?php echo config('web_site_title'); ?></title>

    <meta name="description" content="<?php echo config('web_site_description'); ?>">
    <meta name="keywords" content="<?php echo config('web_site_keywords'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    

    
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="__ADMIN_IMG__/favicons/favicon.ico">
    <!-- END Icons -->
    

    <!-- Stylesheets -->
    <link rel="stylesheet" href="__LIBS__/slick/slick.min.css">
    <link rel="stylesheet" href="__LIBS__/slick/slick-theme.min.css">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="__ADMIN_CSS__/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="__ADMIN_CSS__/oneui.css">
    <link rel="stylesheet" href="__MODULE_CSS__/main.css">
    <!-- END Stylesheets -->

    
</head>
<body id="<?php echo strtolower(\think\Request::instance()->module()); ?>-<?php echo strtolower(\think\Request::instance()->controller()); ?>-<?php echo strtolower(\think\Request::instance()->action()); ?>" class="<?php echo strtolower(\think\Request::instance()->module()); ?>-<?php echo strtolower(\think\Request::instance()->controller()); ?>-<?php echo strtolower(\think\Request::instance()->action()); ?>">

<!-- Page Container -->
<div id="page-container" class="header-navbar-fixed header-navbar-transparent">
    
    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <div class="content-boxed">
            <!-- Header Navigation Right -->
            <ul class="nav-header pull-right">
                <li class="hidden-md hidden-lg">
                    <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-navicon"></i>
                    </button>
                </li>
            </ul>
            <!-- END Header Navigation Right -->

            <!-- Main Header Navigation -->
            <ul class="js-nav-main-header nav-main-header pull-right">
                <li class="text-right hidden-md hidden-lg">
                    <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                </li>
                <?php if(is_array($main_nav) || $main_nav instanceof \think\Collection || $main_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $main_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                <li class="<?php echo (isset($menu['css']) && ($menu['css'] !== '')?$menu['css']:''); ?>">
                    <a href="<?php echo $menu['url']; ?>" rel="<?php echo (isset($menu['rel']) && ($menu['rel'] !== '')?$menu['rel']:''); ?>" target="<?php echo $menu['target']; ?>"><?php echo $menu['title']; if(!(empty($menu['child']) || (($menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator ) && $menu['child']->isEmpty()))): ?> <i class="fa fa-fw fa-angle-down"></i><?php endif; ?></a>
                    <?php if(!(empty($menu['child']) || (($menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator ) && $menu['child']->isEmpty()))): ?>
                    <ul>
                        <?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?>
                        <li class="<?php echo (isset($sub_menu['css']) && ($sub_menu['css'] !== '')?$sub_menu['css']:''); ?>">
                            <a href="<?php echo $sub_menu['url']; ?>" rel="<?php echo (isset($sub_menu['rel']) && ($sub_menu['rel'] !== '')?$sub_menu['rel']:''); ?>" target="<?php echo $sub_menu['target']; ?>"><?php echo $sub_menu['title']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <!-- END Main Header Navigation -->

            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="header-content">
                    <a class="h5" href="<?php echo url('cms/index/index'); ?>">
                        <img src="__MODULE_IMG__/logo.png" alt="">
                    </a>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </div>
    </header>
    <!-- END Header -->
    

    
<!-- Main Container -->
<main id="main-container">
    <?php if(empty($slider) || (($slider instanceof \think\Collection || $slider instanceof \think\Paginator ) && $slider->isEmpty())): ?>
    <div class="bg-image" style="background-image: url('__MODULE_IMG__/photo12@2x.jpg');">
        <div class="bg-primary-dark-op">
            <section class="content content-full content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown" style="font-size: 72px">海豚PHP快速开发框架</h1>
                    <h2 class="h5 text-white-op push-50 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown" style="font-size: 44px">极速 · 极简 · 极致</h2>
                    <a class="btn btn-rounded btn-noborder btn-lg btn-primary visibility-hidden" data-toggle="appear" data-class="animated bounceIn" data-timeout="800" href="###">点击下载 V1.0公测版</a>
                    <div class="text-white-op push-10-t">当前版本：1.0.0 <sup>beta</sup>　[<a class="text-white-op" href="###">更新日志</a>]　下载量：0</div>
                    <p class="push-10-t" data-toggle="appear" data-class="animated fadeInUp">
                        <a class="text-white-op" href="https://coding.net/u/LoopMing/p/DolphinPHP/git" target="_blank">Coding.net</a> or <a class="text-white" href="https://github.com/caiweiming/dolphinphp.git" target="_blank">Github</a>
                    </p>
                </div>
                <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
                    <div class="col-sm-8 col-sm-offset-2">
                        <img class="img-responsive pull-b" src="__MODULE_IMG__/preview.jpg" alt="">
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
    </div>
    <?php endif; if(!(empty($slider) || (($slider instanceof \think\Collection || $slider instanceof \think\Paginator ) && $slider->isEmpty()))): ?>
    <div class="slider">
        <!-- Slider with dots and hover arrows -->
        <div class="js-slider slick-nav-white slick-nav-hover" data-slider-dots="true" data-slider-arrows="true" data-slider-autoplay="true" data-slider-autoplay-speed="3000">
            <?php if(is_array($slider) || $slider instanceof \think\Collection || $slider instanceof \think\Paginator): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div>
                <a href="<?php echo (isset($item['url']) && ($item['url'] !== '')?$item['url']:'javascript:void(0);'); ?>" target="_blank"><img class="img-responsive" src="<?php echo get_file_path($item['cover']); ?>" alt="<?php echo $item['title']; ?>"></a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- END Slider with dots and hover arrows -->
    </div>
    <?php endif; ?>

    <!-- Classic Features #1 -->
    <div class="bg-white">
        <section class="content content-boxed">
            <!-- Section Content -->
            <div class="row items-push-3x push-50-t nice-copy">
                <div class="col-sm-4">
                    <div class="text-center push-30">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-rocket"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Bootstrap Powered</h3>
                    <p>Bootstrap is a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. OneUI was built on top, extending it to a large degree.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-screen-smartphone"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Fully Responsive</h3>
                    <p>The User Interface will adjust to any screen size. It will look great on mobile devices and desktops at the same time. No need to worry about the UI, just stay focused on the development.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-clock"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Save time</h3>
                    <p>OneUI will save you hundreds of hours of extra development. Start right away coding your functionality and watch your project come to life months sooner.</p>
                </div>
            </div>
            <div class="row items-push-3x nice-copy">
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-check"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Frontend Pages</h3>
                    <p>Premium and fully responsive frontend pages are included in OneUI package, too. They use the same resources with the backend, so you can build your web application in one go, using all available components wherever you like.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push-30">
                        <span class="item item-2x item-circle border">{less}</span>
                    </div>
                    <h3 class="h5 font-w600 text-center push-10">LessCSS</h3>
                    <p>OneUI was built from scratch with LessCSS. Completely modular design with components, variables and mixins that will help you customize and extend your framework to the maximum.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-speedometer"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Grunt Tasks</h3>
                    <p>Grunt tasks will make your life easier. You can use them to live-compile your Less files to CSS as you work or build your custom color themes and framework.</p>
                </div>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
    <!-- END Classic Features #1 -->

    <!-- Mini Stats -->
    <div class="bg-gray-lighter">
        <section class="content content-boxed">
            <!-- Section Content -->
            <div class="row items-push push-20-t push-20 text-center">
                <div class="col-sm-4">
                    <div class="h1 push-5" data-toggle="countTo" data-to="15760" data-after="+"></div>
                    <div class="font-w600 text-uppercase text-muted">Accounts Today</div>
                </div>
                <div class="col-sm-4">
                    <div class="h1 push-5" data-toggle="countTo" data-to="3890" data-after="+"></div>
                    <div class="font-w600 text-uppercase text-muted">Products</div>
                </div>
                <div class="col-sm-4">
                    <div class="h1 push-5" data-toggle="countTo" data-to="890" data-after="+"></div>
                    <div class="font-w600 text-uppercase text-muted">Web Apps</div>
                </div>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
    <!-- END Mini Stats -->

    <!-- Classic Features #2 -->
    <div class="bg-white">
        <section class="content content-boxed">
            <!-- Section Content -->
            <div class="row items-push-3x push-50-t nice-copy">
                <div class="col-sm-4">
                    <div class="text-center push-30">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-compass"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Cross Browser Support</h3>
                    <p>OneUI will play nice with all modern browsers such as Chrome, Firefox, Safari, Opera and the latest versions of Internet Explorer (9 and up).</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-book-open"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Documentation</h3>
                    <p>OneUI comes packed with a great documentation which covers all the basics to get you familiar with template’s structure and files. It is the best way to get started.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-rocket"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Clean &amp; Commented Code</h3>
                    <p>The code is created with the developer in mind. It is clean, easy to follow, easy to replicate and at the same time well commented, so that you never feel lost.</p>
                </div>
            </div>
            <div class="row items-push-3x nice-copy">
                <div class="col-sm-4">
                    <div class="text-center push-30">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-wrench"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Components</h3>
                    <p>OneUI comes packed with so many unique components. Carefully picked and integrated to enhance and enrich your project with great functionality. Use them anywhere you want.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-support"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Support</h3>
                    <p>By purchasing a license of OneUI, you are eligible to email support. Should you get stuck somewhere or come accross any issue, don’t worry because I am here to provide assistance.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-heart"></i>
                                    </span>
                    </div>
                    <h3 class="h5 font-w600 text-uppercase text-center push-10">Crafted With Love</h3>
                    <p>I love what I do. I pay extra attention to small details and always try delivering the best I can with each project. My goal is to create a great product for you, that will make your life easier.</p>
                </div>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
    <!-- END Classic Features #2 -->
</main>
<!-- END Main Container -->


    
    <!-- Footer -->
    <footer id="page-footer" class="bg-white">
        <div class="content content-boxed">
            <!-- Footer Navigation -->
            <div class="row push-30-t items-push-2x">
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">公司</h3>
                    <ul class="list list-simple-mini font-s13">
                        <?php if(is_array($about_nav) || $about_nav instanceof \think\Collection || $about_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $about_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                        <li class="<?php echo (isset($menu['css']) && ($menu['css'] !== '')?$menu['css']:''); ?>">
                            <a class="font-w600" rel="<?php echo (isset($menu['rel']) && ($menu['rel'] !== '')?$menu['rel']:''); ?>" href="<?php echo $menu['url']; ?>" target="<?php echo $menu['target']; ?>"><?php echo $menu['title']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">服务与支持</h3>
                    <ul class="list list-simple-mini font-s13">
                        <?php if(is_array($support_nav) || $support_nav instanceof \think\Collection || $support_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $support_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                        <li class="<?php echo (isset($menu['css']) && ($menu['css'] !== '')?$menu['css']:''); ?>">
                            <a class="font-w600" rel="<?php echo (isset($menu['rel']) && ($menu['rel'] !== '')?$menu['rel']:''); ?>" href="<?php echo $menu['url']; ?>" target="<?php echo $menu['target']; ?>"><?php echo $menu['title']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">联系我们</h3>
                    <?php echo config('cms_config.contact'); ?>
                </div>
            </div>
            <!-- END Footer Navigation -->

            <!-- Copyright Info -->
            <div class="font-s12 push-20 clearfix">
                <hr class="remove-margin-t">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="javascript:;" >上海浦定资产管理有限公司</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="javascript:;" target="_blank"><?php echo config('web_site_title'); ?></a> &copy; <span class="js-year-copy"></span>
                </div>
            </div>
            <!-- END Copyright Info -->
        </div>
    </footer>
    <!-- END Footer -->
    
</div>
<!-- END Page Container -->


<div class="hidden">
    
    <?php echo config('web_site_statistics'); ?>
    
</div>

<?php if(\think\Config::get('cms_config.support_status') == '1'): ?>
<div id="support" class="support">
    <div class="support-tag" style="background-color: <?php echo \think\Config::get('cms_config.support_color'); ?>"><i class="fa fa-fw fa-commenting"></i>在线客服</div>
    <div class="support-content" style="background-color: <?php echo \think\Config::get('cms_config.support_color'); ?>">
        <div class="support-content-inner">
            <?php if(is_array($support) || $support instanceof \think\Collection || $support instanceof \think\Paginator): $i = 0; $__LIST__ = $support;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="support-item">
                <strong><?php echo $item['name']; ?></strong>
                <p>
                    <?php if(!(empty($item['qq']) || (($item['qq'] instanceof \think\Collection || $item['qq'] instanceof \think\Paginator ) && $item['qq']->isEmpty()))): ?>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $item['qq']; ?>&site=qq&menu=yes">
                        <img src="http://wpa.qq.com/pa?p=2:348468810:4" alt="<?php echo $item['name']; ?>">
                    </a>
                    <?php endif; if(!(empty($item['taobao']) || (($item['taobao'] instanceof \think\Collection || $item['taobao'] instanceof \think\Paginator ) && $item['taobao']->isEmpty()))): ?>
                    <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $item['taobao']; ?>&siteid=cntaobao&status=2&charset=utf-8">
                        <img border="0" src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo $item['taobao']; ?>&site=cntaobao&s=2&charset=utf-8" alt="<?php echo $item['name']; ?>">
                    </a>
                    <?php endif; if(!(empty($item['skype']) || (($item['skype'] instanceof \think\Collection || $item['skype'] instanceof \think\Paginator ) && $item['skype']->isEmpty()))): ?>
                    <a href="callto://<?php echo $item['skype']; ?>">
                        <img border="0" src="http://metinfo.io/public/images/skype/skype_11.gif" alt="<?php echo $item['name']; ?>">
                    </a>
                    <?php endif; if(!(empty($item['alibaba']) || (($item['alibaba'] instanceof \think\Collection || $item['alibaba'] instanceof \think\Paginator ) && $item['alibaba']->isEmpty()))): ?>
                    <a href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo $item['alibaba']; ?>&site=cnalichn&s=10&charset=UTF-8">
                        <img border="0" src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo $item['alibaba']; ?>&site=cnalichn&s=10&charset=UTF-8" alt="<?php echo $item['name']; ?>">
                    </a>
                    <?php endif; if(!(empty($item['msn']) || (($item['msn'] instanceof \think\Collection || $item['msn'] instanceof \think\Paginator ) && $item['msn']->isEmpty()))): ?>
                    <a href="msnim:chat?contact=<?php echo $item['msn']; ?>"><img border="0" src="http://metinfo.io/public/images/msn/msn_1.gif" alt="<?php echo $item['name']; ?>"></a>
                    <?php endif; ?>
                </p>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; if(!(empty(\think\Config::get('cms_config.support_extra')) || ((\think\Config::get('cms_config.support_extra') instanceof \think\Collection || \think\Config::get('cms_config.support_extra') instanceof \think\Paginator ) && \think\Config::get('cms_config.support_extra')->isEmpty()))): ?>
            <div class="support-extra">
                <?php echo \think\Config::get('cms_config.support_extra'); ?>
            </div>
            <?php endif; if(!(empty(\think\Config::get('cms_config.support_wx')) || ((\think\Config::get('cms_config.support_wx') instanceof \think\Collection || \think\Config::get('cms_config.support_wx') instanceof \think\Paginator ) && \think\Config::get('cms_config.support_wx')->isEmpty()))): ?>
            <div class="support-wx">
                <img src="<?php echo get_file_path(\think\Config::get('cms_config.support_wx')); ?>" alt="">
                <div class="text-center">扫描微信二维码</div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="__ADMIN_JS__/core/jquery.min.js"></script>
<script src="__ADMIN_JS__/core/bootstrap.min.js"></script>
<script src="__ADMIN_JS__/core/jquery.slimscroll.min.js"></script>
<script src="__ADMIN_JS__/core/jquery.scrollLock.min.js"></script>
<script src="__ADMIN_JS__/core/jquery.appear.min.js"></script>
<script src="__ADMIN_JS__/core/jquery.countTo.min.js"></script>
<script src="__ADMIN_JS__/core/jquery.placeholder.min.js"></script>
<script src="__ADMIN_JS__/core/js.cookie.min.js"></script>
<script src="__ADMIN_JS__/app.js"></script>
<script src="__LIBS__/slick/slick.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo', 'slick']);

        // 在线客服
        $('#support').hover(function () {
            $(this).find('.support-content').show();
        }, function () {
            $(this).find('.support-content').hide();
        })
    });
</script>

</body>
</html>