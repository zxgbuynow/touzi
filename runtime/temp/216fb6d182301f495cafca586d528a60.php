<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/data/httpd/touzi/public/../application/index/view/member/login.html";i:1520524495;}*/ ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link rel="stylesheet" href="__HOME_CSS__/user.css" />
    <link rel="stylesheet" href="__HOME_CSS__/base.css" />
    <script type="text/javascript" src="__HOME_JS__/jquery.js"></script>
    <script type="text/javascript" src="__HOME_JS__/require.js"></script>
    <!-- <script type="text/javascript" charset="UTF-8" src="__HOME_JS__/main-user.js"></script> -->
    <meta name="format-detection" content="telephone=no" />
</head>

<body>
    <div class="ld-head bgfff">
        <div class="wrapper"><span class="lg-trun"><a href="/"><img style="width: 58px" src="__HOME_IMG__/tw5o.png"/></a><em
                    class="cole9 f20">|</em><em><a href="javascript:;" class="f24 col333">欢迎登录</a></em></span></div>
    </div>
    <div class="bgf2">
        <div class="ld-user">
            <div class="wrapper"><span class="fl"><img src="__HOME_IMG__/loading-l.jpg"/></span>
                <div class="fr lg-ipt bgfff relative">
                    <span class="ct-open" style="display: none;">账户名或密码错误。如果24小时内同一手机号连续输错5次密码，将锁定该账户。您已输错
<label class="failed_time">1</label>次。你可以选择找回登录密码。</span>
                    <h3 class="f40 col000 tac">登录</h3>
                    <form class="rs-data" id="login_form">
                        <span>
      <input type="text" placeholder="请输入真实有效的手机号码" name="phone" class="rs-ipt" id="phone"/>
      <div class="error-pr phone-text disnone"><p class="f12 cold7">手机号码错误，请填写11位手机号！</p></div>
      </span><span>
      <input type="password" placeholder="请输入密码" class="rs-ipt" name="password" id="password"/>
      <div class="error-pr password-text disnone"><p class="f12 cold7">密码格式有误，请重新输入！</p></div>
      </span>
                        <div class="clearfix pb10"></div>
                        <a href="javascript:void(0);" class="agreed-to mb15 login">登录</a>
                        <p class="f12 col888"><em>
                        <a href="<?php echo url('Member/modifyPwdFirst'); ?>" class="mr50 col888">忘记密码？</a>没有账户？<a href="<?php echo url('Member/register'); ?>" class="col9d zcbtn">立即注册</a></em>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="user-foot">
            <div class="wrapper">
                <div class="cp-nav fl">
                    <p>
                        <?php if(is_array($advlist) || $advlist instanceof \think\Collection || $advlist instanceof \think\Paginator): $k = 0; $__LIST__ = $advlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;if($k>1): ?><em>|</em><?php endif; ?>
                        <?php echo $item['content']; endforeach; endif; else: echo "" ;endif; ?>
                    </p>
                    <span><?php echo $config['web_site_copyright']['value']; ?><br/><?php echo $config['web_site_icp']['value']; ?><em>|</em>投资有风险，购买需谨慎</span>
                </div>
                <div class="ur-tel fl"><em>在线客服服务热线</em>
                    <p class="f36 mt7 mb8">40000-xxxx</p>
                    <em>24小时专属服务</em>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--Footer-->
</body>
<script type="text/javascript">
/***************登录start***********/
//{code: 0, msg: "用户不存在或被禁用！", data: "", url: "", wait: 3}
//{code: 1, msg: "用户不存在或被禁用！", data: "", url: "http://zg.touzi.com/index.php/index/member/login.html",…}
$(document).ready(function(){
    $(".login").click(function () {
        if($(".password-text ").is(':visible') || $(".phone-text").is(':visible')){
            return false;
        } 
    
        var obj = $("#login_form").serialize();
        var jumpUrl = "<?php echo url('Member/login'); ?>";
        $.ajax({
            url: jumpUrl,
            type: 'post',
            data: obj,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    alert(res.msg);
                    window.location.href = "/";
                }else{
                    alert(res.msg);
                } 
            }
        })
    });
});

/***************登录end***********/
</script>
</html>