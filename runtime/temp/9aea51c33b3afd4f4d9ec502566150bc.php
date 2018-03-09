<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/data/httpd/touzi/public/../application/index/view/member/register.html";i:1520524016;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__HOME_CSS__/user.css" />
<link rel="stylesheet" type="text/css" href="__HOME_CSS__/base.css" />
<script type="text/javascript" src="__HOME_JS__/jquery.js"></script>
<script type="text/javascript" src="__HOME_JS__/require.js"></script>
<!-- <script type="text/javascript" src="__HOME_JS__/main-user.js"></script> -->
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

      <p class="fr ldbtn"><em class="f16 col000">已有账号？</em><a href="<?php echo url('Member/login'); ?>">去登录</a></p>
    </div>
</div>
<div class="register relative">
    <div class="rs-box bgfff">
        <h3 class="f40 col000 tac">注册</h3>
        <form class="rs-data" id="register_form">
          <span>
          <input type="text" placeholder="请输入真实有效的手机号码" class="rs-ipt" name="phone" id="phone" />
          <div class="error-pr disnone phone-text"><p class="f12 cold7">手机号码错误，请填写11位手机号！</p></div>
          </span>
          <span>
            <input type="text" placeholder="请输入短信验证码" class="fl rs-ipt" name="code" id="code"/>
            <a href="javascript:void(0);" data-clickable="1" data-code-need="1" class="get-yzm fr disnone showcode">获取验证码</a>
            <!--获取倒计时-->
            <div class="error-pr disnone code-text"><p class="f12 cold7">短信验证码错误！</p></div>
          </span>
          <span>
            <input type="password" placeholder="请输入密码" class="rs-ipt"  name="password" id="password"/>
            <div class="fr ps-level password-lenth disnone">
                <i class="col888 fl">密码强度:</i>
               <label class="password0"></label> <em class="password-on password1"></em><em class="password-on password2"></em><em class="password-on password3"></em>
            </div>
           <div class="error-pr password1-text disnone"><p class="f12 col888">6~16位字符，至少包含数字、字母符号中的2种！</p></div> 
         </span>
         <span>
            <input type="password" placeholder="请再次输入密码" class="rs-ipt"  name="repassword" id="repassword"/>
            <div class="error-pr  disnone  repassword-text"><p class="f12 cold7">2次输入密码不一致，请重新输入！</p></div>
          </span>
          <div class="agreement">
              <input type="checkbox" class="fl" checked  name="chk_agreement" id="chk_agreement"/>
              <p class="fl f12 col888">
                <em>阅读并同意<a href="javascript:void(0);" onclick="javascript:window.open('<?php echo url('About/detail',['id'=>$protocol['id']]); ?>','','menubar=no,toolbar=no,location=no,directories=no,scrollbars=yes,status=yes,resizable=yes,top=0,left=0,width='+(screen.availWidth-10)+',height='+(screen.availHeight-45));">《注册协议》</a></em></p>
          </div>
          <a href="javascript:void(0)" class="agreed-to agreed-register">同意并注册</a>
        </form>
    </div>
</div>
<div class="pop-by disnone"></div>

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
<!--Footer-->
<script type="text/javascript">
  $('.showcode').click(function(){
      $('#code').val(Math.floor(Math.random()*9000) + 1000);
  })

  $(".agreed-register").click(function () {
        if (!$("#chk_agreement").is(':checked')) {
            alert("请勾选注册协议");
            return false;
        }
        var obj = $("#register_form").serialize();
        $.ajax({
            url: "<?php echo url('Member/register'); ?>",
            type: 'post',
            data: obj,
            dataType: 'json',
            success: function (res) {
              if (res.code == 1) {
                   window.location.href = "/";
              }else{
                  alert(res.msg);
              } 
            }     
        })
    })
</script>
</body>
</html>