<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/data/httpd/touzi/public/../application/mobile/view/member/login.html";i:1520675800;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <title>用户登录 - 手机中投在线</title>
    <meta name="keywords" content="用户登录">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0,minimal-ui">
    <meta name="format-detection" content="telephone=no" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta charset="utf-8">
        
    <link rel="stylesheet" type="text/css" href="__M_CSS__/style.css?v=1.2" />
    <script type="text/javascript" src="__M_JS__/zepto.min.js"></script>
<script type="text/javascript" src="__M_JS__/swiper.min.js"></script>
<script type="text/javascript" src="__M_JS__/common.js?v=1.2"></script>
<script type="text/javascript" src="__M_JS__/book.js?v=1.2"></script>
   <script>
   (function(doc,win){
           var docEl = doc.documentElement,
                   resizeEvt = "orientationchange" in window ? "orientationchange" : "resize",
                   recalc = function() {
                       var clientWidth = docEl.clientWidth;
             if( clientWidth > 751 ){
               var clientWidth = 750;
             }
             if(!clientWidth)return;
                       docEl.style.fontSize = clientWidth/10 + "px";
                   };

           if(!doc.addEventListener)return;

           win.addEventListener(resizeEvt,recalc,false);
           doc.addEventListener("DOMContentLoaded",recalc,false);

       })(document,window);
   </script>
    
</head>

<body>
    
    <link rel="stylesheet" type="text/css" href="__M_CSS__/user.css?v=1.2" />
<!-- <script type="text/javascript" src="__M_JS__/user.js?v=1.2"></script> -->
<!-- <script type="text/javascript" src="__M_JS__/ajaxFileUpload.js?v=1.2"></script> -->
<section class="m-page bgf5">
    <!--Head-->
    <section class="mail-head tac f40 colfff">
        <a href="javascript:history.go(-1);" class="icon-fh user-fh"></a>
        登录
        <a href="<?php echo url('Member/register'); ?>" class="f32 fp-sign">注册</a>
    </section>

    <!--main-->
    <section class="sin-midmain">
    <!-- 错误提示 -->
    <section class="sin-error disnone">
        <div class="sin-errormn f26 colfff disnone">
            账户或密码错误，若24小时内同一手机号连续输错5次密码，
将锁定该账户。您已输错3次。您可以找回登录密码。
        </div>
    </section>
    <div class="sin-mn">
        <p class="tac user-reglogo mb50"><a href="/"><img src="__M_IMG__/logo.png" alt=""></a></p>
        <form action="#" onsubmit="return false">
         <input id="csrf-token-key" name="token-key" value="Y89mSm5mBHOe8VinyKUqsg" type="hidden" />
        <input id="csrf-token-value" name="token-value" value="9tqlVRlczG9hVtpjFtF0XA" type="hidden" />
            <div class="fd-midmn clearfix">
                <i class="fl icon-user-sjh"></i>
                <input type="text" class="fl" placeholder="输入手机号码" id="phone" onblur="checkPhone(this);">
                <p class="reg-error f26 coldf0000 absolute phone-error disnone"><em class="icon-user-ty"></em>手机号码不正确</p>
            </div>
            <div class="fd-midmn clearfix">
                <i class="fl icon-user-mm"></i>
                <input type="password" class="fl" placeholder="6-16位字母、数字或者符号组合" id="password" onblur="checkPwd(this);">
                <p class="reg-error f26 coldf0000 absolute pwd-error disnone"><em class="icon-user-ty"></em>请输入6-16位数字字母组合密码</p>
            </div>
            <button class="fd-minnextstop f36 tac login-submit">登录</button>
            <p class="tac mt30"><a href="/user/forgetPwd-1.html" class="f32 colaa090d">忘记密码？</a></p>
        </form>
    </div>
    </section>
    <section class="que-conmn disnone">
        重复提交，请刷新页面后重试
    </section>
    <!--Footer-->
    <section class="footer tac">
        <p class="f22">中投在线 © 版权所有 Copyright 2017 touzi.com</p>
    </section>
</section>
<script type="text/javascript">
$(document).ready(function(){
    $(".login-submit").click(function(){
        var pwd = $("#password").val();
        var phone = $("#phone").val();
        if(phone==null || phone=="" || phone == "输入手机号码"){
            $(".phone-error").show();
            return false;
        }
        if(pwd==null || pwd=="" || pwd == "6-16位字母、数字或者符号组合"){
            $(".pwd-error").show();
            return false;
        }
        var myurl = "/user/ajaxCheckPwd.html";
        var tokenKey =  $('#csrf-token-key').val(),
            tokenValue = $('#csrf-token-value').val();
         $.ajax({
            async:false,
            type:"POST",
            url:myurl,
            data:{"phone":phone,"pwd":pwd,'tokenKey':tokenKey,'tokenValue':tokenValue},
            dataType:"json",
            success:function(data) {
                if (data.code == 1) {
                    window.location.href = "/account/toMyInfo.html";
                } else {
                    $('#csrf-token-key').val(data.tokenKey),
                    $('#csrf-token-value').val(data.tokenValue);
                    if(data.code == 2){
                        $(".pwd-error").hide();
                        $(".phone-error").show();
                        $(".phone-error").html('<em class="icon-user-ty"></em>'+data.msg);
                    }else if(data.code == 3){
                        $(".phone-error").hide();
                        $(".pwd-error").show();
                        $(".pwd-error").html('<em class="icon-user-ty"></em>'+data.msg);
                    }else{
                        $(".que-conmn").show();
                        setTimeout(function(){
                            $('.que-conmn').hide();
                        },2000);
                    }
//                    $('.btn').css({background:'#d9d9d9',border:'#d9d9d9',color:'#808080'});
                    return;
                }
            }
        });
    });
});
function checkPhone(obj){
    phone = obj.value;
    var re = /^[0-9]{11}$/;
    if(!re.test(phone) || phone==""){
        $(".phone-error").show();
        $(".phone-error").html('<em class="icon-user-ty"></em>手机号码不正确</a>');
        return false;
    }else{
        $(".phone-error").hide();
    }
    var myurl = "/user/ajaxChkPhone.html";
    $.ajax({
        async:false,
        type:"POST",
        url:myurl,
        data:"phone="+phone,
        dataType:"json",
        success:function(msg) {
            if (!msg.responseText) {
                $(".phone-error").show();
                $(".phone-error").html('<em class="icon-user-ty"></em>手机号码尚未注册</a>');
            }else{
                $(".phone-error").hide();
            }
        }
    });
}
function checkPwd(obj) {
    pwd = obj.value;
    var re = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,16}$/;
    if (re.test(pwd)) {
        $(".pwd-error").hide();
    } else {
        $(".pwd-error").show();
        return false;
    }
}

</script>

             <!-- 在线预约 -->
     <section class="mn-cover disnone"></section>
     <section class="pop-name disnone pop-yuyue">
         <div class="pop-namemn relative">
         <i class="name-popclose icon-pop-colse"></i>
         <img src="__M_IMG__/pop3.png" alt="">
             <h3 class="f40 col222 tac">在线预约</h3>
             <form action="" onsubmit="return false">
                 <div class="appoint-mn mt30">
                     <p class="clearfix"><span class="fl tac">姓名</span><input type="text" class="fl" placeholder="请输入您的姓名" name="userName"></p>
                     <p class="reg-error f26 coldf0000 mb20 disnone" id="xnshow"><em class="icon-user-ty"></em>输入错误（姓名不正确)</p>
                     <p class="clearfix"><span class="fl tac">电话</span><input type="text" class="fl" placeholder="请输入您的联系方式" name="phone"></p>
                     <p class="reg-error f26 coldf0000 mb20 disnone" id="phoneshow"><em class="icon-user-ty"></em>输入错误（联系方式不正确)</p>
                 </div>
                 <input type="submit" value="提交" class="appoint-sub" name="booking">
             </form>
         </div>
     </section>
     <section class="pop-name disnone pop-success">
            <div class="confirm-mn relative">
            <i class="name-popclose icon-pop-colse"></i>
                <h3 class="tac f40 col222">信息提交成功</h3>
                <p class="col222 f36 tac mt30">理财经理会尽快与您联系</p>
            </div>
            <div class="quali-mnc success-hide f36 tac clearfix relative"><a href="javascript:history.go(0);">确定</a></div>
        </section>
    
    
    
    <!-- Google Tag Manager -->
        <script>
            var checkbox = document.getElementById('agree');
            function toRegister(){
                if($(".active").length > 0){
                     window.location.href="/user/register.html";
                }
            }
            function toLogin(){
                var uri = self.location.pathname
                wantToUrl = uri.substr(0,uri.length-5);
                window.location.href="/user/login"+wantToUrl+".html";
            }
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?39b5ed0bf4174a1437be8378251e78d0";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <!-- End Google Tag Manager -->
        <script type="text/javascript" charset="utf-8" async src="https://lxbjs.baidu.com/lxb.js?sid=10727392"></script>
</body>

</html>