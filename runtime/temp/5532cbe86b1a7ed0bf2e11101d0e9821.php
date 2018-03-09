<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/data/httpd/touzi/public/../application/index/view/index/index.html";i:1520501791;s:59:"/data/httpd/touzi/application/index/view/common/header.html";i:1520524663;s:59:"/data/httpd/touzi/application/index/view/common/footer.html";i:1520501799;}*/ ?>
    
    <html>

<head>
    <title>浦定资产首页</title>
    <meta content="浦定资产" name="keywords">
    <meta content="浦定资产" name="description">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="__HOME_CSS__/base.css">
    <link rel="stylesheet" type="text/css" href="__HOME_CSS__/index.css">
    <script type="text/javascript" src="__HOME_JS__/js-cookie.js"></script>
    <script type="text/javascript" src="__HOME_JS__/require.js" ></script>
    <script type="text/javascript" src="__HOME_JS__/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="__HOME_JS__/main/main.js"></script>
    <script type="text/javascript" src="__HOME_JS__/book.js"></script>

    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main" src="__HOME_JS__/main/main.js"></script>
    <script type="text/javascript" src="__HOME_JS__/book.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="common" src="__HOME_JS__/common.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquerySuperSlide" src="__HOME_JS__/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="highstock" src="__HOME_JS__/highstock.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="placeholder" src="__HOME_JS__/placeholder.js"></script>
</head> 

<body>
<!--公共头部-->
    <div class="t-mn">
        <div class="wrapper clearfix">
            <div class="fr f14 relative ldright">
                <!--登陆前-->
                <?php if($_MEMBER): ?>
                <div class="head-login fl">
                    <p class="fl">您好，<?php echo $_MEMBER['username']; ?></p>
                </div>
                <?php else: ?>
                <div class="head-login fl">
                    <p class="fl">您好，请<a href="<?php echo url('Member/login'); ?>" class="landing">登录</a><em>|</em></p>
                    <p class="fl"><a href="<?php echo url('Member/register'); ?>" class="mt2 cold7">免费注册</a><em>|</em></p>
                </div>
                <?php endif; ?>
                
                
                <!--登陆后END-->
            </div>
        </div>
    </div>
    <!--滚动导航-->
    <div class="n-nav slideUp disnone">
        <div class="wrapper"> <img src="__HOME_IMG__/scroll-logo.png" class="fl mt5">
            <ul class="n-nav-lst f16 tac fl">
                <li class="fl relative"><a href="./trust/index.html" class="col333">集合信托</a></li>
                <li class="fl"><a href="./ziguan/index.html" class="col333">集合资管</a></li>
                <li class="fl"><a href="./zhengfuzhai/index.html" class="col333">私募基金</a></li>
                <li class="fl"><a href="./ssgsrz/index.html" class="col333 nnav-label">股权定增</a></li>
                <li class="fl"><a href="./simu/index.html" class="col333">私募债</a></li>
                <li class="fl"><a href="./vcpe/index.html" class="nnav-label col333">视频中心</a></li>
                <li class="fl"><a href="./about/index.html" class="nnav-label col333">关于我们</a></li>
                <li class="fl"><a href="" class="nnav-label col333">在线客服</a></li>
            </ul>
            <div class="fr clearfix">
                <p class="n-nav-nbr f16 col9d fl relative"> <i class="n-nav-icon1 absolute"></i>40000-91888</p>
            </div>
        </div>
    </div>
    <!--logo部分-->
    <div class="bgfff">
        <div class="head wrapper relative clearfix"><a class="fl" href="/"><img src="__HOME_IMG__/tw5o.png" height="60" class="logo"></a>
            <div class="head-sch fl">
                <div class="head-sch-mn f14 mb5">
                    <input name="" type="text" placeholder="请输入搜索关键字" class="head-sch-ipt" maxlength="30" value="">
                    <div class="head-sshints absolute disnone">
                        <p></p>
                    </div>
                    <input name="" type="button" class="head-btn colfff" value="搜索">
                </div>
                <span>
        <a target="_blank" href="<?php echo url('Product/detail',['id' => 1]); ?>" class="col999 mr20 f12">长春宝成棚改项目</a>
                <a target="_blank" href="<?php echo url('Product/detail',['id' => 1]); ?>" class="col999 mr20 f12">漯河华鼎定向融资</a>
        </span>
            </div>
            <div class="h-tel fr"><i></i>
                <p class="f32 col9d">40000-91888</p>
            </div>
        </div>
    </div>
    <div class="h-menu">
        <div class="wrapper">
            <span class="fl f18">
              <a href="/" class="current">首页</a>
              <a href="./trust/index.html">集合信托</a>
              <a href="./ziguan/index.html">集合资管</a>
              <a href="./zhengfuzhai/index.html" class="relative ">私募基金</a>
              <a href="./ssgsrz/index.html" class="relative ">股权定增</a>
              <a href="./simu/index.html">私募基金</a>
              <a href="./vcpe/index.html">私募债</a>
              <a href="./vcpe/index.html">视频中心</a>
              <a href="./about/index.html">关于我们</a>
              <a href="">在线客服</a>
            </span>
        </div>
    </div>
    <!--banner-->
    <div class="bnr relative slideBox1">
        <ul class="bnr-lst absolute" style="position: relative; width: 1280px; height: 480px;">
            <li style="background: url(&quot;/upload/articles/20171212/1513062914946457.jpg&quot;) center top no-repeat rgb(72, 55, 27); position: absolute; width: 1280px; left: 0px; top: 0px; display: none;"><a href="https://www.touzi.com/zhuanti/171211ztnfx/" target="_blank"></a></li>
            <li style="background: url(&quot;/upload/articles/20180116/1516063408608996.jpg&quot;) center top no-repeat rgb(72, 55, 27); position: absolute; width: 1280px; left: 0px; top: 0px; display: none;"><a href="https://www.touzi.com/zhuanti/180115zyxs/" target="_blank"></a></li>
            <li style="background: url(&quot;/upload/articles/20171128/1511855077837351.jpg&quot;) center top no-repeat rgb(72, 55, 27); position: absolute; width: 1280px; left: 0px; top: 0px; display: none;"><a href="https://www.touzi.com/zhuanti/171128ccpg/" target="_blank"></a></li>
            <li style="background: url(&quot;/upload/articles/20171225/1514165905801692.jpg&quot;) center top no-repeat rgb(72, 55, 27); position: absolute; width: 1280px; left: 0px; top: 0px; display: none;"><a href="https://www.touzi.com/zhuanti/171225bsjj/" target="_blank"></a></li>
            <li style="background: url(&quot;/upload/articles/20171208/1512721527638897.jpg&quot;) center top no-repeat rgb(72, 55, 27); position: absolute; width: 1280px; left: 0px; top: 0px; display: list-item;"><a href="https://www.touzi.com/zhuanti/1208dlct/" target="_blank"></a></li>
            <li style="background: url(&quot;/upload/articles/20180105/1515134580624342.jpg&quot;) center top no-repeat rgb(72, 55, 27); position: absolute; width: 1280px; left: 0px; top: 0px; display: none;"><a href="https://www.touzi.com/zhuanti/180104kjy/" target="_blank"></a></li>
        </ul>
        <div class="bnr-btn tac absolute clearfix">
            <div class="clear"></div>
            <div class="bnr-nbr">
                <p class="tac n-expand">
                    <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                    <i class="on"></i>
                    <i class=""></i>
                </p>
            </div>
        </div>
        <div class="bar-sd absolute">
            <ul>
                <li class="clearfix relative">
                    <div class="brlr">
                        <h3 class="f16 mb5 bar-shhover1 col333">信托产品</h3>
                        <p class="bar-sd-lst fl"><a href="/trust/productlist-uf3.html#anchor" target="_blank">基础设施</a><a href="/trust/productlist-uf1.html#anchor" target="_blank" class="relative bar-label">房地产</a></p>
                        <i class="bar-sd-rotate"></i>
                        <!--展开第一种形式-->
                        <div class="absolute bar-main bar-xtzg disnone" style="display: none;">
                            <h4 class="bar-main-tt clearfix"> <span class="f24 col333 fl">信托产品</span> <a href="/trust/" class="f14 fr mt10 relative" target="_blank">更多<i class="absolute bar-main-icon"></i></a> </h4>
                            <p class="f14 bar-main-text"><a href="/trust/productlist-uf1.html#anchor" target="_blank" class="no-pl">房地产</a><em class="cole4">|</em> <a href="/trust/productlist-uf2.html#anchor" target="_blank">金融市场</a><em class="cole4">|</em> <a href="/trust/productlist-uf3.html#anchor" target="_blank">基础设施</a><em class="cole4">|</em> <a href="/trust/productlist-uf4.html#anchor" target="_blank">工商企业</a></p>
                            <div class="bar-lstjs">
                                <div class="clearfix">
                                    <h4 class="f24 col333 bold relative pr-nav-tle fl">
                                        <a target="_blank" href="/trust/product-2350.html" class="textOver">
                国元信托修文工投</a></h4>
                                    <p class="f14 commission mt5 fl ml5"><i>
<img src="__HOME_IMG__/hbpic.jpg"></i><em>6000元起</em></p>
                                </div>
                                <p class="home-tj-doc f12 col888 mt15 textOver2">推荐理由：贵阳市下辖直属县修文县政信+民生安置房项目，国有独资企业融资，政府出函支持+政府融资平台担保，履约担保能力强。</p>
                                <div class="home-tj-nbr clearfix">
                                    <p class="fl col888 nav-number">预计年收益率</p>
                                    <div class="tac f48 fl col9d pl15"><i><strong>8.30</strong></i><span class="f24 col9d">%</span></div>
                                    <a target="_blank" href="/trust/product-2350.html" class="f16 colfff home-tj-more  home-tj-more1 tac fr">查看详情</a>
                                </div>
                            </div>
                            <div class="navpic"><a href="/trust/" target="_blank"><img src="__HOME_IMG__/navpic.jpg" class="n-expand"></a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- <div class="bar-sdc absolute">
            <div class="clearfix"><a href="./about/brand.html" target="_blank"><img src="__HOME_IMG__/bright.png"></a></div>
            <ul class="box-nav">
                <li><a href="./news/list-t1-classId-76-cid-21.html" target="_blank" class="nav-br nav-bt"><i class="nav-bg"></i>研究院</a></li>
                <li><a href="./news/list-t1-classId-21-cid-22.html" target="_blank" class="nav-br nav-bt"><i class="nav-bg2"></i>理财学院</a></li>
                <li><a href="/zixun/" target="_blank" class="nav-bt"><i class="nav-bg3"></i>中投百科</a></li>
                <li><a href="./news/list-t1-classId-120.html" target="_blank" class="nav-br"><i class="nav-bg4"></i>私募周报</a></li>
                <li><a href="./news/list-t1-classId-122.html" target="_blank" class="nav-br"><i class="nav-bg5"></i>私募月报</a></li>
                <li><a href="./zt.html" target="_blank" class="nav-br lasta"><i class="nav-bg6"></i>精选专题</a></li>
            </ul>
            <div class="ztscroll mt10">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:230px">
                        <ul style="width: 690px; left: -230px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                            <li style="float: left; width: 230px;"> <a href="https://www.touzi.com/zhuanti/171211ndyxl/" target="_blank"><img src="/upload/articles/20180105/1515134728368033.jpg"></a></li>
                            <li style="float: left; width: 230px;"> <a href="https://www.touzi.com/zhuanti/171222shzrj/" target="_blank"><img src="/upload/articles/20171222/1513922327123061.jpg"></a></li>
                            <li style="float: left; width: 230px;"> <a href="https://www.touzi.com/zhuanti/171130yth/" target="_blank"><img src="/upload/articles/20171212/1513062908291967.jpg"></a></li>
                        </ul>
                    </div>
                </div>
                <a class="prev" href="javascript:void(0)"><i></i></a><a class="next" href="javascript:void(0)"><i></i></a>
            </div>
        </div> -->

        <!--奖项-->
        <!-- <div class="award">
            <div class="wrapper f16">
                <p><a href="./about/evaluate.html" target="_blank">《中国经济导报》中国经济十大创新企业</a></p>
                <em>|</em>
                <p><a href="./about/evaluate.html" target="_blank">上海市信息服务行业协会会员单位</a></p>
                <em>|</em>
                <p><a href="./about/evaluate.html" target="_blank">上海交通大学SIPA经管中心唯一战略伙伴</a></p>
                <em>|</em>
                <p><a href="./about/evaluate.html" target="_blank">《投资有道》最具成长价值机构</a></p>
            </div>
        </div> -->

        <!---内容区域-->
        <div class="content">
            <div class="wrapper">
                <!--会员福利-->
                <!-- <h4 class="mt30 mb20 home-vipArea-tt">
                    <span class="col333 f20">会员福利</span><span class="f16 col68 ml10">会员加息产品</span>
                    <a href="https://www.touzi.com/zhuanti/171226zthyzc/" class="fr col68">更多</a>
                </h4>
                <div class="clearfix overhidd">
                    <div class="clearfix home-vipArea-pro-mnc">

                        <div class="home-vipArea-pro fl">
                            <h4 class="home-vipArea-pro-tt clearfix tac textOver">
                                <a href="./product/product-2423.html" class="f24 col333">铜仁市纬源投资定融</a>
                            </h4>
                            <div class="tac">
                                <p class="f14 commission mt20 mb20 mr30"><i><img src="__HOME_IMG__/hbpic3.jpg"></i><em>限时加息</em></p>
                            </div>
                            <div class="clearfix">
                                <div class="home-vipArea-pro-sd fl tar">
                                    <p class="col9d f48">10.00<span class="f24">%</span></p>
                                    <span class="f14 col999">预期年化收益率</span>
                                </div>
                                <p class="col9d f48 fl">+</p>
                                <div class="home-vipArea-pro-sd fl">
                                    <p class="col9d f48">0.3<span class="f24">%</span></p>
                                    <span class="f14 col999">加息</span>
                                </div>
                            </div>
                            <div class="col999 home-vipArea-doc clearfix tac mt30">
                                <span class="fl">20万起投</span>
                                <span class="fr">12+12月</span>
                            </div>
                            <a href="./product/product-2423.html" class="home-vipArea-go tac f18 mt20 ">立即预约</a>
                        </div>

                        <div class="home-vipArea-pro fl">
                            <h4 class="home-vipArea-pro-tt clearfix tac textOver">
                                <a href="./product/product-2310.html" class="f24 col333">普定城投定向融资</a>
                            </h4>
                            <div class="tac">
                                <p class="f14 commission mt20 mb20 mr30"><i><img src="__HOME_IMG__/hbpic3.jpg"></i><em>限时加息</em></p>
                            </div>
                            <div class="clearfix">
                                <div class="home-vipArea-pro-sd fl tar">
                                    <p class="col9d f48">10.00<span class="f24">%</span></p>
                                    <span class="f14 col999">预期年化收益率</span>
                                </div>
                                <p class="col9d f48 fl">+</p>
                                <div class="home-vipArea-pro-sd fl">
                                    <p class="col9d f48">0.6<span class="f24">%</span></p>
                                    <span class="f14 col999">加息</span>
                                </div>
                            </div>
                            <div class="col999 home-vipArea-doc clearfix tac mt30">
                                <span class="fl">20万起投</span>
                                <span class="fr">24月</span>
                            </div>
                            <a href="./product/product-2310.html" class="home-vipArea-go tac f18 mt20 ">立即预约</a>
                        </div>

                        <div class="home-vipArea-pro fl">
                            <h4 class="home-vipArea-pro-tt clearfix tac textOver">
                                <a href="./product/product-2436.html" class="f24 col333">多伦城投定融</a>
                            </h4>
                            <div class="tac">
                                <p class="f14 commission mt20 mb20 mr30"><i><img src="__HOME_IMG__/hbpic3.jpg"></i><em>限时加息</em></p>
                            </div>
                            <div class="clearfix">
                                <div class="home-vipArea-pro-sd fl tar">
                                    <p class="col9d f48">10.30<span class="f24">%</span></p>
                                    <span class="f14 col999">预期年化收益率</span>
                                </div>
                                <p class="col9d f48 fl">+</p>
                                <div class="home-vipArea-pro-sd fl">
                                    <p class="col9d f48">0.5<span class="f24">%</span></p>
                                    <span class="f14 col999">加息</span>
                                </div>
                            </div>
                            <div class="col999 home-vipArea-doc clearfix tac mt30">
                                <span class="fl">100万起投</span>
                                <span class="fr">24月</span>
                            </div>
                            <a href="./product/product-2436.html" class="home-vipArea-go tac f18 mt20 ">立即预约</a>
                        </div>
                    </div>

                    <div class="mt20 clearfix home-vipArea-lst">
                        <span class="f18 fl col333 ml30 mr30">会员线下活动</span>
                        <span class="cole9e fl">|</span>
                        <ul>
                            <p class="f16 fl textOver">
                                <a href="https://www.touzi.com/zhuanti/180104kjy/" class="col333"><span class="col999 mr5">2017.12.27</span>儿童康健院公益之行</a>
                            </p>
                            <span class="cole9e fl">|</span>
                            <p class="f16 fl textOver">
                                <a href="https://www.touzi.com/zhuanti/171130yth/" class="col333"><span class="col999 mr5">2017.11.25</span>黄浦江畔VIP游艇会</a>
                            </p>
                            <span class="cole9e fl">|</span>
                            <p class="f16 fl textOver">
                                <a href="https://www.touzi.com/zhuanti/170928dzx/" class="col333"><span class="col999 mr5">2017.9.28</span>中秋国庆双节“蟹”礼</a>
                            </p>
                        </ul>
                    </div>
                </div> -->
                <!--热销产品-->
                <div class="sgt-lst relative clear">
                    <div class="smgq-tt clearfix"> <span class="col333 f20 smgq-tt-name">热销产品</span> </div>
                    <ul class="clearfix">
                        <li class="no-bright">
                            <h4 class="f24 relative suggest-tt2 clearfix">
                            <span class="textOver"><a target="_blank" title="长春宝成棚改项目" class="col333" href="./product/product-2435.html">长春宝成棚改项目</a></span> </h4>
                            <div class="preferential mb35">
                                <p class="f14 commission mr30"><i><img src="__HOME_IMG__/hbpic.jpg"></i><em>现金红包</em></p>
                            </div>
                            <div class="suggest-mnc">
                                <div>
                                    <p class="suggest-nbr f48 col9d tac"> 11.50<em class="f24">%</em></p>
                                    <p class="f14 col9c tac">预期年化收益率</p>
                                </div>
                                <div class="tar suggest-keyword2 f16 tac"><span class="onebr">12+6月</span><span>100万起投</span> </div>
                                <div class="clear"></div>
                            </div>
                            <a href="./product/product-2435.html" target="_blank" class="suggest-yy tac">查看详情</a>
                        </li>
                    </ul>
                </div>
                <!--视频中心-->
                <div class="h-video">
                    <h3 class="retitle f20 col333">
                    <p class="fl">视频中心<em class="colred pl8">VIDEO CENTER</em></p>
                    <span class="fr"><a href="/zhibo/" target="_blank" class="f16 col888 morelink">更多<i class="moresj"></i></a></span></h3>
                    <ul class="videopic">
                        <li>
                            <a href="../news/168169173-711583.html" target="_blank"><img src="/Uploads/2018-01-17/1516170333306972.jpg" onerror="this.src='__HOME_IMG__/video.jpg'"><i></i><p><em>遵义习水城市建设定融</em></p></a>
                        </li>
                    </ul>
                </div>
                <!--产品列表-->
                <div class="product">
                    <h3 class="f20 pr-title"><a href="./productlist/productlist-lo5.html#anchor" target="_blank">稀缺政府债</a></h3>

                    <div class="fl red-bg colfff relative">
                        <h4 class="f22 redtle">云贵川地区政府债券<i></i></h4>
                        <p class="f16 mt20">西部大开发"十三五"规划地区</p>
                        <p class="f16 mt10">强大信用保障 专享免税待遇</p>
                        <ul class="bgnav redcol">
                            <li><a href="./productlist/fuzhai/productlist-0-te1.html#anchor" target="_blank">短期投资</a></li>
                            <li><a href="./productlist/fuzhai/productlist-0-te0-ps1.html#anchor" target="_blank">10万起投</a></li>
                            <li><a href="./productlist/fuzhai/productlist-0-rs4.html#anchor" target="_blank">高收益</a></li>
                            <li><a href="./productlist/fuzhai/productlist-0-pt3.html#anchor" target="_blank">快速反息</a></li>
                        </ul>
                    </div>
                    <div class="fr pr-cont bgfff">
                        <div class="hotprent">
                            <div class="hot-pr fl">
                                <h3 class="tac hp-tle"><p class="inline-block"><a target="_blank" href="./product/product-2479.html" class="f24 col333">保山基建定向融资</a></p>
                                    <p class="f14 commission ml5"><i><img src="__HOME_IMG__/hbpic.jpg"></i>
                                        <em>现金红包</em>
                                    </p>
                                </h3>
                                <div class="clearfix hot-prointr">
                                    <p class="fl tac pr-two"> <span class="f36 col333 describe"><em class="f36">6+6月</em></span> <span class="col888">投资期限</span> </p>
                                    <p class="fl pr-frist"> <span class="col9d f40 describe">9.80<em class="f24">%</em>                    </span> <span class="col888">预期年化收益率</span> </p>
                                    <p class="fr tac tar"> <span class="f36 col333 describe"><em class="f40">20</em>万</span> <span class="col888">起投金额</span> </p>
                                </div>
                                <div class="pr-introduce">
                                    <p class="col888 textOver2"><i></i>稀缺地级市政信，6+6月短期限，AA评级国企担保，应收账款质押两倍覆盖本息</p>
                                </div>
                                <a target="_blank" href="./product/product-2479.html" class="to-view">查看详情</a> 
                            </div>

                            <div class="hot-list fr">
                                <div class="data2-lis-text relative ">
                                    <div class="f16 textOver">
                                        <div class="overhidd">
                                            <a target="_blank" href="./product/product-2246.html" class="col333 fl">西南交投定向融资</a>
                                            <p class="f12 commission2 ml5"><i><img src="__HOME_IMG__/hbpic.jpg"></i><em>现金红包</em></p>
                                        </div>
                                    </div>
                                    <p class="col888">预期年化收益率<em class="f20 col9d pl5 ftblack">10.20</em><em class="f16 col9d">%</em>
                                        <em class="f20 col9d ftblack">+</em><em class="f20 col9d ftblack">0.5</em><em class="f16 col9d">%</em>
                                    </p>
                                    <p class="col888">起投金额<em class="col333 pl5">20万</em></p>
                                    <a target="_blank" href="./product/product-2246.html" class="lis-txt-btn">查看详情</a>
                                </div>
                                <div class="data2-lis-text relative ">
                                    <div class="f16 textOver">
                                        <div class="overhidd">
                                            <a target="_blank" href="./product/product-2534.html" class="col333 fl">云南云县城建定融</a>
                                            <p class="f12 commission2 ml5"><i><img src="__HOME_IMG__/hbpic.jpg"></i><em>现金红包</em></p>
                                        </div>
                                    </div>
                                    <p class="col888">预期年化收益率<em class="f20 col9d pl5 ftblack">9.60</em><em class="f16 col9d">%</em>
                                    </p>
                                    <p class="col888">起投金额<em class="col333 pl5">10万</em></p>
                                    <a target="_blank" href="./product/product-2534.html" class="lis-txt-btn">查看详情</a>
                                </div>
                                <div class="data2-lis-text relative nobr">
                                    <div class="f16 textOver">
                                        <div class="overhidd">
                                            <a target="_blank" href="./product/product-2487.html" class="col333 fl">河口国资定融</a>
                                            <p class="f12 commission2 ml5"><i><img src="__HOME_IMG__/hbpic.jpg"></i><em>现金红包</em></p>
                                        </div>
                                    </div>
                                    <p class="col888">预期年化收益率<em class="f20 col9d pl5 ftblack">9.70</em><em class="f16 col9d">%</em>
                                    </p>
                                    <p class="col888">起投金额<em class="col333 pl5">20万</em></p>
                                    <a target="_blank" href="./product/product-2487.html" class="lis-txt-btn">查看详情</a>
                                </div>
                            </div>

                        </div>
                        <div class="pattern">
                            <span><a href="https://www.touzi.com/zhuanti/170614zfz/" target="_blank"><img src="/upload/articles/20170620/1497959970222930.jpg" width="450" height="140" class="n-expand"></a></span>
                            <span><a href="https://www.touzi.com/zhuanti/170901wjzx/" target="_blank"><img src="/upload/articles/20170901/1504258421800604.jpg" width="450" height="140" class="n-expand"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pop-by disnone appoiment-by"></div>
        <div class="pop-box pop-dysucc slideLeft public-open disnone appoiment-box" style="position: fixed; left: 475px; top: 165.5px;">
            <div class="pop-close absolute n-scaling close-icon  appoiment-close"></div>
            <h3 class="tac f22 col333">提交成功</h3>
            <div class="popdysucc-icon"></div>
            <p class="tac f14">您的信息提交成功！
                <br>我们的专业理财经理会尽快联系您！</p>
            <div class="pop-close auto radius5 pop-close-btn tac f14 col333 appoiment-close">关闭</div>
        </div>

        <div class="r-spnav slideRight disnone">
            <a href="http://crm2.qq.com/page/portalpage/wpa.php?uin=800189986&amp;f=1&amp;ty=1&amp;aty=0&amp;a=&amp;from=6" target="_blank"><i class="rico"></i></a>
            <a href="/feedback/index" target="_blank"><i class="rico2"></i></a>
            <p><i class="rico3"></i><em>回顶部</em></p>
        </div>
        
        <!--foot-->
        <div class="foot">
            <div class="wrapper">
                <div class="fnav cole7">
                    <div class="fttxt fl">
                        <dl>
                            <dt><a href="./about/brand.html" target="_blank">关于我们</a></dt>
                            <dd>
                                <a href="./about/brand.html" target="_blank">公司介绍</a>
                                <a href="./about/news.html" target="_blank">公司动态</a>
                                <a href="./about/system.html" target="_blank">风控体系</a>
                                <a href="./about/address.html" target="_blank">联系我们</a>
                            </dd>
                        </dl>
                        <dl class="pdlr">
                            <dt><a href="/trust/">产品及服务</a></dt>
                            <dd><a href="/trust/">信托资管</a><a href="/simu/">阳光私募</a><a href="/vcpe/">私募股权</a></dd>
                        </dl>
                        <dl>
                            <dt><a href="./news/" target="_blank">新闻资讯</a></dt>
                            <dd><a href="./news/list-t1-classId-76-cid-21.html" target="_blank">中投研究院</a><a href="./news/list-t1-classId-21-cid-22.html" target="_blank">理财学院</a><a href="/zixun/" target="_blank">中投百科</a></dd>
                        </dl>
                    </div>
                    <div class="fl ftel"><span><img src="__HOME_IMG__/foot-logo.png"></span><em class="f12">在线客服服务热线</em>
                        <p class="f36">40000-91888</p>
                        <em class="colf2">24小时专属服务</em></div>
                    <!-- <div class="fr erwm"><span class="mr48"><img src="__HOME_IMG__/wx.png" style="width:112px;height:112px;"><em>微信公众号</em></span><span><img src="__HOME_IMG__/pc.png" style="width:112px;height:112px;"><em>手机客户端</em></span></div> -->
                </div>
                <div class="fcopy up-txt">
                    <p class="fl">友情链接：
                        <a target="_blank" href="http://contract.58btc.com/index.html"> 58BTC</a>
                        <a target="_blank" href="https://www.tuandai.com/"> 团贷网</a>
                        <a target="_blank" href="http://www.528btc.com/"> 币界网</a>
                        <a target="_blank" href="http://www.trjcn.com/"> 投融资平台</a>
                        <a target="_blank" href="http://www.xinhehui.com"> 互联网投资</a>
                        <a target="_blank" href="http://www.anxin.com/ask/"> 安心贷理财</a>
                        <a target="_blank" href="http://www.qianzhan.com/indynews/"> 财经资讯</a>
                        <a target="_blank" href=""> </a>
                        <a target="_blank" href=""> </a>
                    </p>
                    <i class="fr upbtn"></i></div>
                <div class="cpright cole7">
                    <p class="fl">浦定投资 © 版权所有 Copyright 2017 puding.com , All Rights Reserved
                        <br> 沪ICP备13017629号 沪公网安备 31011002001486号<em>|</em>投资有风险，购买需谨慎</p>
                    <span class="fr"><img src="__HOME_IMG__/fpic3.jpg"><img src="__HOME_IMG__/fpic4.jpg"><img src="__HOME_IMG__/fpic5.jpg"></span></div>
            </div>
        </div>
    </div>    
    <div id="cli_dialog_div"></div>
</body>

</html>
    