<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/data/httpd/touzi/public/../application/mobile/view/member/register.html";i:1520676105;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <title>用户注册 - 手机中投在线</title>
    <meta name="keywords" content="用户注册">
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
<!-- <script type="text/javascript" src="/static/mobile/js/user.js?v=1.2"></script> -->
<!-- <script type="text/javascript" src="/static/mobile/js/ajaxFileUpload.js?v=1.2"></script> -->
<section class="m-page bgf5">
    <!--Head-->
    <section class="mail-head tac f40 colfff">
        <a href="" class="icon-fh user-fh"></a>
        注册
        <a href="<?php echo url('Member/login'); ?>" class="f32 fp-sign">登录</a>
    </section>
    <!--main-->
    <section class="reg-midmain">
        <p class="tac user-reglogo mb50"><a href="/"><img src="__M_IMG__/user-logo.png" alt=""></a></p>
        <form action="">
            <div class="fd-midmn clearfix">
                <i class="fl icon-user-sjh"></i>
                <input type="tel" class="fl" placeholder="输入手机号码" onblur="checkPhone(this);">
                <p class="reg-error f26 coldf0000 absolute disnone" id="showResult"><em class="icon-user-ty"></em>手机号码不正确</p>
            </div>
            <div class="fd-midmn clearfix">
                <i class="fl icon-user-mm"></i>
                <input type="password" class="fl" placeholder="6-16位字母、数字或者符号组合" onblur="checkPwd(this);">
                <p class="reg-error f26 coldf0000 absolute disnone" id="showResult1"><em class="icon-user-ty"></em>请输入6-16位数字字母组合密码</p>
            </div>
            <div class="clearfix spfd-midmn">
                <div class="fd-midmn clearfix fl">
                    <i class="fl icon-user-yzm"></i>
                    <input type="text" class="fl" placeholder="短信验证码" id="code">
                    <p class="reg-error f26 coldf0000 absolute disnone" id="showResult2"><em class="icon-user-ty"></em>验证码不正确</p>
                </div>
                <a href="javascript:void(0)" class="fr tac fd-midresend f32 get-code" data-clickable='1' data-code-need ="1">获取验证码</a>
                <a href="javascript:;" class="fr tac fd-midtime disnone f32">获取验证码</a>
            </div>
            <p class="f30 col222 login-agree"><input type="checkbox" class="fd-midcheckbox login-agree" checked="checked">我已阅读并同意<a href="javascript:void(0);" style="color:#006cff" onclick="javascript:window.open('\\static/common/files/contracts/service.pdf?v=1.0','','menubar=no,toolbar=no,location=no,directories=no,scrollbars=yes,status=yes,resizable=yes,top=0,left=0,width='+(screen.availWidth-10)+',height='+(screen.availHeight-45));">《注册协议》</a></p>
            <input id="csrf-token-key" name="token-key" value="p5g756iL7c9D5sivVL60w" type="hidden" />
            <input id="csrf-token-value" name="token-value" value="x0C5sjTB3ymTtHy0WtNOqQ" type="hidden" />
            <input class="fd-minnextstop f36 tac btn" type="button" value="注 册" onclick="register();">
        </form>
    </section>
    <p class="tac f32 reg-bm">24小时客服 热线 : <em class="bold">40000-91888</em></p>
    <!-- 弹框 -->
    <section class="reg-cover">
        <div class="reg-pop">
            <i class="reg-popclose icon-pop-colse"></i>
            <div class="reg-popmn">
                <h3 class="tac f40 col222">图形验证码</h3>
                <div class="mt30 clearfix mb20">
                    <input type="text" class="fl f30 col222" maxlength="4" name="picCode">
                    <a href="javascript:void(0)" class="fr">
                        <img src="/user/getCode.html?code_len=4&amp;font_size=18&amp;width=82&amp;height=35&amp;font_color=&amp;background=&amp;&amp;random=0.19073234352033347" width="82" height="35" class="phone-vcode" onclick="this.src=this.src+&quot;&amp;&quot;+Math.random()" alt="">
                    </a>
                </div>
                <p class="reg-error regpop-error f26 coldf0000 mb20 code-error disnone"><em class="icon-user-ty"></em>图形验证码不正确</p>
                <input type="submit" class="f36 colfff regpop-submit picCode-check" value="提交">
            </div>
        </div>
    </section>

    <section class="que-conmn disnone">
        注册失败
    </section>

    <!--Footer-->
    <section class="footer tac">
        <p class="f22">中投在线 © 版权所有 Copyright 2017 touzi.com</p>
        <a href="https://www.touzi.com/" class="footer-gotopc">返回电脑版</a>
    </section>

</section>

<script>
    //var handlerEmbed = function (captchaObj) {
    //        $("#embed-submit").click(function (e) {
    //            var validate = captchaObj.getValidate();
    //            if (!validate) {
    //                $("#notice")[0].className = "show";
    //                setTimeout(function () {
    //                    $("#notice")[0].className = "hide";
    //                }, 2000);
    //                e.preventDefault();
    //            }
    //        });
    //        // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
    //        captchaObj.appendTo("#embed-captcha");
    //        captchaObj.onReady(function () {
    //            $("#wait")[0].className = "hide";
    //        });
    //    };

    //    $.ajax({
    //            // 获取id，challenge，success（是否启用failback）
    //            url: "/user/gcheck.html?t=" + (new Date()).getTime(), // 加随机数防止缓存
    //            type: "get",
    //            dataType: "json",
    //            success: function (data) {
    //                // 使用initGeetest接口
    //                // 参数1：配置参数
    //                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
    //                initGeetest({
    //                    gt: data.gt,
    //                    challenge: data.challenge,
    //                    new_captcha: data.new_captcha,
    //                    product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
    //                    offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
    //                }, handlerEmbed);
    //            }
    //        });

    var onclickAccept=true;//是否点击了协议,默认是同意的
    $("input[type='checkbox']").click(function(){
        if($(this).is(':checked')){
//            $('.btn').css({background:'#aa090d',color:'#fff'});
            onclickAccept=true;
        }else{
//            $('.btn').css({background:'#d9d9d9',color:'#808080'});
            onclickAccept=false;
        }
    })

    //    var onclickAccept=true;//是否点击了协议,默认是同意的
//    $(".login-agree label").click(function(){
////        $(this).toggleClass('active');
//        if($(this).hasClass('active')){
//            $(this).removeClass("active")
//        }else{
//            $(this).addClass("active")
//        }
//        //若协议没有都同意，则无法继续注册
//        if($('#label1').hasClass('active') && $('#label2').hasClass('active')){
//            $('.btn').css({background:'#ffb131',border:'#ffb131',color:'#fff'});
//            onclickAccept=true;
//        }else{
//            $('.btn').css({background:'#d9d9d9',border:'#d9d9d9',color:'#808080'});
//            onclickAccept=false;
//        }
//    });

    var canRegister = false;//是否可以注册，false不能

    //检查手机号是否已经注册
    var phone;
    function checkPhone(obj){
        phone = obj.value;
        var re = /^[0-9]{11}$/;
        if(!re.test(phone) || phone==""){
            canRegister=false;
            $("#showResult").show();
            $("#showResult").prev().addClass('s-error');
//            $('.btn').css({background:'#d9d9d9',color:'#808080'});
            return;
        }else{
            canRegister=true;
            $(".showResult").hide();
            $("#showResult").prev().removeClass('s-error');
        }
        var myurl = "/user/ajaxChkPhone.html";
        $.ajax({
            async:false,
            type:"POST",
            url:myurl,
            data:"phone="+phone,
            dataType:"json",
            success:function(msg) {
                if (msg.responseText) {
                    $("#showResult").show();
                    $("#showResult").html('<em class="icon-user-ty"></em>该手机号已注册，请直接<a href="/account/toMyInfo.html" style="color:#006cff">&nbsp;登录&nbsp;&nbsp;</a>');
                    $("#showResult").prev().addClass('s-error');
                    canRegister = false;
//                    $('.btn').css({background:'#d9d9d9',color:'#808080'});
                } else {
                    $("#showResult").hide();
                    $("#showResult").prev().removeClass('s-error');
//                    $('.btn').css({background:'#aa090d',color:'#fff'});
                    canRegister=true;
                }
            }
        });
    }

    //检查密码，6-16位数字组合
    var pwd;
    function checkPwd(obj){
        pwd = obj.value;
        var re = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,16}$/;
        if(re.test(pwd)){
            $("#showResult1").html("");
            $("#showResult1").prev().removeClass('s-error');
            canRegister=true;
//            $('.btn').css({background:'#aa090d',color:'#fff'});
        }else{
            $("#showResult1").show();
            $("#showResult1").prev().addClass('s-error');
            canRegister = false;
//            $('.btn').css({background:'#d9d9d9',color:'#808080'});
        }
    }
    //确认密码重复正确
//    function checkPwdAgain(obj){
//        var pwd2 = obj.value;
//        if(pwd==pwd2){
//            $("#showResult2").html("");
//            canRegister=true;
//            $('.btn').css({background:'#ffb131',border:'#ffb131',color:'#fff'});
//        }else{
//            $("#showResult2").html("<font color='black'>两次输入密码不一致，请重新输入</font>");
//            canRegister = false;
//            $('.btn').css({background:'#d9d9d9',border:'#d9d9d9',color:'#808080'});
//        }
//    }

    //是否同意协议
//    var onclickAccept=true;//是否点击了协议,默认是同意的
//    $(".login-agree label").tap(function(){
//        $(this).toggleClass('active');
//        //若协议没有都同意，则无法继续注册
//        if($('#label1').hasClass('active') && $('#label2').hasClass('active')){
//            $('.btn').css({background:'#ffb131',border:'#ffb131',color:'#fff'});
//            onclickAccept=true;
//        }else{
//            $('.btn').css({background:'#d9d9d9',border:'#d9d9d9',color:'#808080'});
//            onclickAccept=false;
//        }
//    });
    //验证手机号是否正确
    function validatePhone(mobileNumber) {
        if(mobileNumber.length==0){
            return false;
        }
        if (mobileNumber.match(/^1[34578]\d{9}$/)) {
            return true;
        }
        return false;
    }
    $(document).on('tap','.picCode-check',function(){
        var picCodeValue = $("input[name='picCode']").val();
        var phone = $('input[type=tel]').val();
        if(picCodeValue.length !=4){
            $(".code-error").show();
            return false;
        }
        $.ajax({
            url:'/user/phoneCodeCheck.html',
            data:{picCode:picCodeValue,phone:phone},
            dataType:'json',
            type:'post',
            success:function(oData){
                if(oData.result)else{
                    $(".code-error").show();
                    return false;
                }
            }
        })
    });



    $(document).on('tap',".get-code",function(){
        var phone = $('input[type=tel]').val();
        if(!validatePhone(phone)|| phone ==""){
            $("#showResult").show();
            $("#showResult").prev().addClass('s-error');
            return false;
        }else{
            var clickStatus = $(".get-code").attr("data-clickable");
            var codeStatus = $(".get-code").attr("data-code-need");
            if(clickStatus == 0){
                return false;
            }
            if(clickStatus == 1 && codeStatus == 1){
                var sSrc = _getVCodeSrc();
                $('.phone-vcode').attr('src',sSrc);
                $(".reg-cover").show();
                return false ;
            }
            if(clickStatus == 2){
                //ajax request
                var phone = $('input[type=tel]').val();
                _requestPhoneCode(phone);
            }
        }
    });

    function _getVCodeSrc(){
        var sSrc = $('.phone-vcode').attr('src');
        var aSrc = sSrc.split('&random');
        sSrc = aSrc[0]+'&random='+Math.random();

        return sSrc;
    }

    function _requestPhoneCode(phone){
        var msgType = msgType || 1;
        $.ajax({
            url:'/user/sendPhoneCode.html',
            data:{phone:phone,msgType:msgType},
            dataType:'json',
            type:'post',
            success:function(oData){
                //code=2 means that send times is used out
                if(oData.code == 2){
                    var sSrc = _getVCodeSrc();
                    $('.phone-vcode').attr('src',sSrc);
                    $(".reg-cover").show();
                }else{
                    if(msgType === 1){
                        //count down
//                        $('.resend').css("display","block");
                        var o = $('.get-code');
                        var wait = 60;
                        time(o,wait);
                        setTimeout(function(){
                            $('.get-code').attr('data-clickable',1);
                        },1000);
                        $('.get-code').attr('data-clickable',2);
                    }
                }
            }
        });
    }
    function time(o,wait) {
        if (wait == 0) {
            o.attr('data-clickable',2);
//            o.removeClass("disnone");
//            $('.resend').css("display","none");
            o.text("获取验证码");
            wait = 60;
        } else {
            o.attr('data-clickable',0);
            o.text( wait + "s后重发");
            wait--;
            setTimeout(function() {
                time(o,wait);
            },1000);
        }
    }

    //检查验证码

    //注册
    function register(){
        if(pwd!=null && phone!=null && pwd!="" && phone!="" && canRegister==true && onclickAccept==true){
//            var pwd2 = $(".pwd2").val();
            var myurl = "/user/register.html";
            var code = $("#code").val();
            var tokenKey =  $('#csrf-token-key').val(),
                tokenValue = $('#csrf-token-value').val();
            var geeChallenge = $('input[name=geetest_challenge]').val();
            var geeValidate = $('input[name=geetest_validate]').val();
            var geeSeccode = $('input[name=geetest_seccode]').val();
//            if(!geeChallenge || !geeValidate || !geeSeccode){
//                $(".error-info").text('请先完成验证');
//                return false;
//            }
            $.ajax({
                async:true,
                type:"POST",
                url:myurl,
                data:{'phone':phone,'pwd':pwd,'code':code,'geetest_challenge':geeChallenge,
                    'geetest_validate':geeValidate,'geetest_seccode':geeSeccode,'tokenKey':tokenKey,'tokenValue':tokenValue},
                dataType:"json",
                success:function(msg) {
                    if(msg.responseText){
                        window.location.href = "/user/regSuccess.html";
                    }else {
                        $('#csrf-token-key').val(msg.tokenKey),
                            $('#csrf-token-value').val(msg.tokenValue);
                        if(msg.code == 2 || msg.code == 3){
                            $("#showResult2").show();
                            $("#showResult2").html('<em class="icon-user-ty"></em>'+msg.msg+'</a>');
                        }else{
                            $(".que-conmn").show();
                            setTimeout(function(){
                                $('.que-conmn').hide();
                            },2000);
                        }
//                        $("#showResult3").html("<font color='black'>"+msg.msg+"</font>");


//                        $('.btn').css({background:'#d9d9d9',color:'#808080'});

                        return;
                    }
                },
                error:function(){
                    alert("网络异常");
                }
            });
        }
    }
</script>             <!-- 在线预约 -->
     <section class="mn-cover disnone"></section>
     <section class="pop-name disnone pop-yuyue">
         <div class="pop-namemn relative">
         <i class="name-popclose icon-pop-colse"></i>
         <img src="/static/mobile/images/pop3.png" alt="">
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