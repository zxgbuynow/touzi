<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/data/httpd/touzi/public/../application/index/view/member/modifypwdfirst.html";i:1520304648;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__HOME_CSS__/user.css" />
<link rel="stylesheet" type="text/css" href="__HOME_CSS__/base.css" />
<script type="text/javascript" src="__HOME_JS__/require.js"></script>
<script type="text/javascript" src="__HOME_JS__/main-user.js"></script>
<meta name="format-detection" content="telephone=no"/>
</head>
<body>

<div class="p-menu">
  <div class="wrapper">
    <div class="fl"><img src="__HOME_IMG__/tw5o.png" style="width: 58px"/>
      <p><a href="javascript:void(0);" target="_blank" class="f24 col333">找回密码</a></p>
    </div>
    <div class="fr"><a href="/" class="f16">返回首页</a></div>
  </div>
</div>
<!--password-steps-->
<div class="bgf6">
<div class="pass-steps">
  <dl class="current">
    <dd><span>1</span>
      <p>填写账户信息</p>
    </dd>
  </dl>
  <dl>
    <dt></dt>
    <dd><span>2</span>
      <p>验证身份</p>
    </dd>
  </dl>
  <dl>
    <dt></dt>
    <dd><span>3</span>
      <p>设置新密码</p>
    </dd>
  </dl>
  <dl>
    <dt></dt>
    <dd><span>4</span>
      <p>完成</p>
    </dd>
  </dl>
</div>
</div>
<!--password-input-->
 <form action=" " method="post" id="form">
<div class="pass-form">
  <div class="pass-ipt-one">
    <ul>
      <li class="relative">
        <input type="text" placeholder="请输入您的注册手机号" maxlength="11" data-value="请输入您的注册手机号" class="f14 pass-ipt-txt user-phone" name="phone">
        <div class="user-pass absolute user-phone-err disnone">
                        <div class="absolute user-radius-icon1"></div>
                        <div class="absolute user-radius-icon2"></div>
                        <p class="f12 col888"></p>
        </div>
      </li>
      <li class="relative">
        <input type="text" placeholder="请输入验证码" data-value="请输入验证码" name="verify" class="ipt pass-test f14 fl pass-ipt-txt verify-code"><img id='code_img' src="/session/vcode?code_len=4&font_size=18&width=82&height=35&font_color=&background="  onclick='this.src=this.src+"&"+Math.random()' class="fr pointer">
        <div class="user-pass-two absolute disnone">
            <div class="absolute user-radius-icon1"></div>
            <div class="absolute user-radius-icon2"></div>
            <p class="f12 col888">验证码错误！</p>
        </div>
      </li>
    </ul>
    <div class="pass-next"><a href="javascript:void(0);" class="txt f14 colfff modify-pwd-first">下一步</a><p class="f12 col333">想起密码了？<a href="<?php echo url('Member/login'); ?>">马上登录</a></p></div>
  </div>
</div>
</form>
<!--Main-->
<!--Footer-->
<div class="footer tac f14 col9c br-top">
  <p><a href="/about/aboutus.html" target="_blank">公司简介</a>|<a href="/about/product.html" target="_blank">产品及服务</a>|<a href="/about/media.html" target="_blank">媒体报道</a>|<a href="/about/contactUs.html" target="_blank">联系我们</a>|<a href="/about/declaration.html" target="_blank">网站声明</a></p>
  <p>© 2009-2017 www.touzi.com  中投在线©版权所有 <a target="_blank" rel="nofollow" href="http://www.miitbeian.gov.cn/">沪ICP备13017629号</a></p>
</div>
</body>
</html>