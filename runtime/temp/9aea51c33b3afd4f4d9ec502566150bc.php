<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/data/httpd/touzi/public/../application/index/view/member/register.html";i:1520261533;}*/ ?>
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



<div class="ld-head bgfff">
    <div class="wrapper">
      <span class="fl lg-trun">
        <a href="/"><img style="width: 58px" src="__HOME_IMG__/tw5o.png"/>
        <em class="cole9 f20">|</em>
        </a><em><a href="javascript:void(0);" class="f24 col333">账户注册</a></em>
      </span>

      <p class="fr ldbtn"><em class="f16 col000">已有账号？</em><a href="./login.html">去登录</a></p>
    </div>
</div>
<div class="register relative">
    <div class="rs-box bgfff">
        <h3 class="f40 col000 tac">注册</h3>
        <form class="rs-data" id="register_form">
      <span>
      <input type="text" placeholder="请输入真实有效的手机号码" class="rs-ipt" name="phone" id="phone" />
      <div class="error-pr disnone phone-text"><p class="f12 cold7">手机号码错误，请填写11位手机号！</p></div>
      </span><span>
      <input type="text" placeholder="请输入短信验证码" class="fl rs-ipt" name="code" id="code"/>
      <a href="javascript:void(0);" data-clickable="1" data-code-need="1" class="get-yzm fr disnone showcode">获取验证码</a>
        <!--获取倒计时-->
        <!--<em class="get-time fr disnone">120s后重发</em>-->
      <div class="error-pr disnone code-text"><p class="f12 cold7">短信验证码错误！</p></div></span><span>
      <input type="password" placeholder="请输入密码" class="rs-ipt"  name="password" id="password"/>
      <div class="fr ps-level password-lenth disnone">
          <i class="col888 fl">密码强度:</i>
         <label class="password0"></label> <em class="password-on password1"></em><em class="password-on password2"></em><em class="password-on password3"></em>
      </div>
     <div class="error-pr password1-text disnone"><p class="f12 col888">6~16位字符，至少包含数字、字母符号中的2种！</p></div> </span><span>
      <input type="password" placeholder="请再次输入密码" class="rs-ipt"  name="repassword" id="repassword"/>
      <div class="error-pr  disnone  repassword-text"><p class="f12 cold7">2次输入密码不一致，请重新输入！</p></div>
      </span>
      
      
      
            <div class="agreement">
                <input type="checkbox" class="fl" checked  name="chk_agreement" id="chk_agreement"/>
                <p class="fl f12 col888"><em class="mb15">我确定为合格投资者<a href="javascript:void(0);" onclick="javascript:window.open('\\static/common/files/contracts/confirm.pdf?v=1.0','','menubar=no,toolbar=no,location=no,directories=no,scrollbars=yes,status=yes,resizable=yes,top=0,left=0,width='+(screen.availWidth-10)+',height='+(screen.availHeight-45));">《合格投资者认定》</a></em><em>阅读并同意<a href="javascript:void(0);" onclick="javascript:window.open('\\static/common/files/contracts/service.pdf?v=1.0','','menubar=no,toolbar=no,location=no,directories=no,scrollbars=yes,status=yes,resizable=yes,top=0,left=0,width='+(screen.availWidth-10)+',height='+(screen.availHeight-45));">《中投在线服务协议》</a></em></p>
            </div>
            <input type="hidden" name="tokenKey" value="ngiSKTSg7lUNOcKm" />
            <input type="hidden" name="tokenValue" value="AYHH3fD2k0Ex9Dys" />
            <input type="hidden" name="password_grade" class="password_grade" value=""/>
            
                   
            <a href="javascript:void(0)" class="agreed-to agreed-register">同意并注册</a>
        </form>
    </div>
</div>
<div class="pop-by disnone"></div>
<div class="pop-box pop-yzm slideLeft public-open disnone" style="position: fixed; left: 786.5px; top: 304px;">
    <div class="pop-close absolute n-scaling close-icon"></div>
    <h3 class="tac f14 col555">图形验证码</h3>
    <span class="yzm-ipt">
        <input type="text" class="fl picCode" name="picCode">
        <img src="/session/vcode?code_len=4&font_size=18&width=82&height=35&font_color=&background=" class="fl phone-vcode"  onclick='this.src=this.src+"&"+Math.random()'/></span>
    <p class="code_msg disnone" style="margin:20px 0px 0px 40px">错误</p>
    <a href="javascript:void(0);" class="yzm-btn picCode-check">提交</a>
</div>
<div class="user-foot">
    <div class="wrapper">
        <div class="cp-nav fl">
            <p>
                <a href="/about/brand.html">中投品牌</a><em>|</em>
                <a href="/about/value.html">竞争优势</a><em>|</em>
                <a href="/about/evaluate.html?flag=1">公司动态</a><em>|</em>
                <a href="/about/address.html">联系我们</a>
            </p>
            <span>中投在线 © 版权所有    Copyright 2017 touzi.com , All Rights Reserved<br />
      沪ICP备13017629号<em>|</em>投资有风险，购买需谨慎</span></div>
        <div class="ur-tel fl"><em>中投在线客服服务热线</em><p class="f36 mt7 mb8">40000-91888</p><em>24小时专属服务</em></div>
        <div class="focus-my fl"><h4>关注我们</h4>
            <span class="weixin"><i></i><img src="./images/user/erwm.png" /></span><span class="myic"><i></i><img src="./images/user/erwm2.png" /></span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--Footer-->
</body>
</html>