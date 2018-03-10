function setTab(obj, hoverObj, setObj, current, active, event, judge) {
    var _this = 0;
    if(!active) {
        obj.find(setObj).hide();
        obj.find(setObj).eq(0).show();
    }
    obj.find(hoverObj).on(event, function() {
        _this = $(this).index();
        if(judge && $(this).prop('tagName')=='LI'){
            _this = $(this).index()+1;
        }
        if(current) {
            //$(this).addClass('on').siblings().removeClass('on');
            obj.find(hoverObj).removeClass('on');
            $(this).addClass('on')
        }
        if(active) {
            obj.find(setObj).eq(_this).removeClass('disnone').siblings().addClass('disnone');
        }else {
            obj.find(setObj).hide();
            obj.find(setObj).eq(_this).show()//.siblings('ul').hide();
        }
    })
}
//setTab($('.tab-box'), '.h-newstt span', '.h-newsbox', 'on', null, 'tap');绑定对象 鼠标经过的切换列表 切换对象

//下拉加载更多
/* $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        //加载事件
        function pscroll(){
        	var $List=$('.ss-result-lst:visible');
        	var Load=$('.ss-result-lst-load');
			if($List.find('li').length >= 10){
				$List.append("<li>数据111</li><li>数据222</li><li>数据333</li><li>数据444</li>");
				$('.ss-result-lst-load').text("下滑加载更多");
			}else{
				$('.ss-result-lst-load').text("没有更多数据");
				return false;
			}
        }
        
        if(scrollTop + windowHeight >= scrollHeight-1){
      		pscroll();
      	}else{
      		// Load.hide();
      	}
    });*/
 
 //返回顶部
 Zepto(function($){
     var topImg = $('.float-top');
	 $(window).scroll(function(){
	 	 var topScrpll = $(window).scrollTop();
	 	// console.log(topScrpll);
	 	if(topScrpll>0){
	 		topImg.removeClass('disnone');
	 	}else{
	 		topImg.addClass('disnone');
	 	}
	 });
	 topImg.tap(function(){
	 	$(window).scrollTop(0);
	 })

 })
$(".user-nt").click(function() {
    $(".noun-cover").show();
});
$(".noun-appclose").click(function() {
    $(".noun-cover").hide();
});

//弹框 会员权益说明 名词解释
Zepto(function($){
    $(".user-nt").click(function() {
        $(".noun-cover").show();
    });
    $(".noun-appclose").click(function() {
        $(".noun-cover").hide();
    });
})
function numFormat(obj,n,bfh){
  obj.each(function(){
	  var num = parseFloat($(this).html());
	  if(!isNaN(num)){
		  num = num.toFixed(n);
          if(num<0)$(this).css("color","#0eb675");
          if(num==0)$(this).css("color","#0eb675");
          if(num>0)$(this).css("color","#aa090d");
		  $(this).html(bfh?num+"%":num);
	  }else{
		  $(this).html("--");
	  }
  })
}
$('.numFormat').each(function(){numFormat($(this),2);});
$(document).ready(function(){
    window.loading = false;
    $(window).scroll(function () {
        if($('.trust_content').is(':visible')==true){
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            var keyWord = $("input[name='search']").val();
            var trustpage = parseInt($("input[name='trustpage']").val());
            var trust_total_page = parseInt($("input[name='trusttotalPage']").val());
            var from = "trust_product";
            //加载事件
            if( scrollTop + windowHeight >= scrollHeight && window.loading === false && trustpage <= trust_total_page){
                window.loading = true;
                trustpscroll();
            }else {
                if (trustpage >= trust_total_page){
                    $(".trust_content .load-more-content").text('已经加载全部内容');
                }
                // Load.hide();
            }
            function trustpscroll(){
                $.ajax({
                    url:"/search/search.html",
                    data:{keyword:keyWord,pageNumber:trustpage,from:from},
                    dataType:"json",
                    success:function(data){
                        if(data != ''){
                            var trustHtml = trust_search_product_html(data);
                            $(".trust_content ul>li").last().after(trustHtml);
                            if(trustpage >= trust_total_page){
                                $(".trust_content .load-more-content").text('已经加载全部内容');
                            }
                            $("input[name='trustpage']").val(++trustpage);
                        }else{
                            $(".trust_content .load-more-content").text('已经加载全部内容');
                        }
                    }
                }).done(function(){
                    window.loading = false;
                })
            }
        }else if($('.simu_content').is(':visible')==true){
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            var keyWord = $("input[name='search']").val();
            var simupage = parseInt($("input[name='simupage']").val());
            var simu_total_page = parseInt($("input[name='simutotalPage']").val());
            var from = "simu_product";
            //加载事件
            if( scrollTop + windowHeight >= scrollHeight-1 && window.loading === false && simupage <= simu_total_page){
                window.loading = true;
                simupscroll();
            }else{
                if (simupage >= simu_total_page){
                    $(".simu_content .load-more-content").text('已经加载全部内容');
                }
                // Load.hide();
            }

            function simupscroll(){
                $.ajax({
                    url:"/search/search.html",
                    data:{keyword:keyWord,pageNumber:simupage,from:from},
                    dataType:"json",
                    success:function(data){
                        if(data != ''){
                            var simuHtml = simu_search_product_html(data);
                            $(".simu_content ul>li").last().after(simuHtml);
                            if(simupage >= simu_total_page){
                                $(".simu_content .load-more-content").text('已经加载全部内容');
                            }
                            $("input[name='simupage']").val(++simupage);
                        }else{
                            $(".simu_content .load-more-content").text('已经加载全部内容');
                        }
                    }
                }).done(function(){
                    window.loading = false;
                })
            }
        }else  if($('.pe_content').is(':visible')==true){
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            var keyWord = $("input[name='search']").val();
            var pepage = parseInt($("input[name='pepage']").val());
            var pe_total_page = parseInt($("input[name='petotalPage']").val());
            var from = "pe_product";
            //加载事件
            if( scrollTop + windowHeight >= scrollHeight && window.loading === false && pepage <= pe_total_page){
                window.loading = true;
                pepscroll();
            }else{
                if (pepage >= pe_total_page){
                    $(".pe_content .load-more-content").text('已经加载全部内容');
                }
                // Load.hide();
            }
            function pepscroll(){
                $.ajax({
                    url:"/search/search.html",
                    data:{keyword:keyWord,pageNumber:pepage,from:from},
                    dataType:"json",
                    success:function(data){
                        if(data != ''){
                            var peHtml = pe_search_product_html(data);
                            $(".pe_content ul>li").last().after(peHtml);
                            if(pepage >= pe_total_page){
                                $(".pe_content .load-more-content").text('已经加载全部内容');
                            }
                            $("input[name='pepage']").val(++pepage);
                        }else{
                            $(".pe_content .load-more-content").text('已经加载全部内容');
                        }
                    }
                }).done(function(){
                    window.loading = false;
                })
            }
        }
    });
    function trust_search_product_html(data){
        var trust_html = "";
        if(data){
            $.each(data,function(index,value) {
                if(value){
                    trust_html += '<li><a href="/trust/list-id-'+(value.id)+'.html">';
                    trust_html += '<h4 class="textOver mb20 f30">'+(value.name)+'</h4>';
                    trust_html += ' <div class="clearfix"><div class="fl home-lst-mnc-sd">';
                    trust_html += '<p class="home-lst-mnc-sd-doc">'+(value.expect_return)+'<span class="f24">%</span></p>';
                    trust_html += '<p class="f24 home-lst-mnc-sd-text">预期年化收益率</p></div>';
                    trust_html += '<div class="fr f30 home-lst-mnc-sdc"><p class="30">'+(value.min_purchase_amount)+'</p><p class="f24 home-lst-mnc-sd-text">'+(value.term)+'</p>';
                    trust_html += '</div></div></a></li>';
                }
            })
        }
        return trust_html;
    }

    function simu_search_product_html(data){
        var simu_html = "";
        if(data){
            $.each(data,function(index,value) {
                if(value){
                    simu_html += '<li><a href="/simu/list-id-'+(value.id)+'.html">';
                    simu_html += '<h4 class="textOver mb20 f30">'+(value.name)+'</h4>';
                    simu_html += '<div class="clearfix"><div class="fl home-lst-mnc-sd">';
                    simu_html += '<p class="home-lst-mnc-sd-doc">';
                    if(!value.return_recent_year1 || value.return_recent_year1 == 'undefined'){
                        value.return_recent_year1 = 0;
                    }else{
                        value.return_recent_year1 = (parseFloat(value.return_recent_year1)).toFixed(2);
                    }
                    simu_html += value.return_recent_year1+'<span class="f24">%</span></p>';
                    simu_html += '<p class="f24 home-lst-mnc-sd-text">近一年收益率</p></div>';
                    simu_html += '<div class="fr f30 home-lst-mnc-sdc"><p class="30">';
                    if(!value.min_purchase_amount || value.min_purchase_amount == 'undefined'){
                        value.min_purchase_amount = 0;
                    }else{
                        value.min_purchase_amount = (parseFloat(value.min_purchase_amount)).toFixed(0);
                    }
                    simu_html += (value.min_purchase_amount)+'万起</p><p class="f24 home-lst-mnc-sd-text">'+(value.typeName)+'</p>';
                    simu_html += '</div></div></a></li>';
                }
            })
        }
        return simu_html;
    }

    function  pe_search_product_html(data){
        var pe_html = "";
        if(data){
            $.each(data,function(index,value) {
                if(value){
                    pe_html += '<li><a href="/vcpe/fund-id-'+(value.id)+'.html">';
                    pe_html += '<h4 class="textOver mb20 f30">'+(value.name)+'</h4>';
                    pe_html += '<div class="clearfix"><div class="fl home-lst-mnc-sd">';
                    pe_html += '<p class="home-lst-mnc-sd-doc">'+(value.min_purchase_amount)+'</p>';
                    pe_html += '<p class="f24 home-lst-mnc-sd-text">起投金额</p></div>';
                    pe_html += '<div class="fr f30 home-lst-mnc-sdc"><p class="30">'+(value.duration)+'</p><p class="f24 home-lst-mnc-sd-text">'+(value.invest_orientation)+'</p>';
                    pe_html += '</div></div></a></li>';
                }
            })
        }
        return pe_html;
    }

    /****************预约******************/
    $('.yy-icon').tap(function(){
        $('.mn-cover,.pop-yuyue').removeClass('disnone');
    });
    $('.name-popclose').tap(function(){
        $('.mn-cover,.pop-name').addClass('disnone');
    });
    $("input[name='userName']").blur(function(){
        var userName = $("input[name='userName']").val();
        if(userName==null || userName==""){
            $("#xnshow").removeClass("disnone");
            $("#xnshow").html('<em class="icon-user-ty"></em>姓名不能为空');
            return false;
        }else{
            $("#xnshow").addClass("disnone");
            return true;
        }
    });

    $("input[name='phone']").blur(function(){
        var phone = $("input[name='phone']").val();
        var pattern = /^\d{11}$/;
        if(!pattern.test(phone)){
            $("#phoneshow").removeClass("disnone");
            $("#phoneshow").html('<em class="icon-user-ty"></em>请输入正确手机号码');
            return false;
        }else{
            $("#phoneshow").addClass("disnone");
            return true;
        }
    });

    $("input[name='booking']").click(function(){
        var phoneRule = /^1[34578]\d{9}$/;
        var nameRule=/^[\u4E00-\u9FA5]+$/;
        var $self = $(".yy-icon");
        var sName = $("input[name='userName']").val();
        var phoneNumber = $("input[name='phone']").val();
        //var time = now.getFullYear()+"/"+(now.getMonth()+1)+"/"+now.getDate()+" "+now.getHours()+":"+now.getMinutes()+":"+now.getSeconds();

        var fnCallback = function(oData){
            if(oData.success){
                $('.pop-yuyue').addClass('disnone');
                $('.pop-success').removeClass('disnone');
            }
        };
        if(sName==null || sName==""){
            $("#xnshow").removeClass("disnone");
            $("#xnshow").html('<em class="icon-user-ty"></em>姓名不能为空');
            return false;
        }else{
            $("#phoneshow").addClass("disnone");
        }
        if(!phoneRule.test(phoneNumber)){
            $("#phoneshow").removeClass("disnone");
            $("#phoneshow").html('<em class="icon-user-ty"></em>请输入正确手机号码');
            return false;
        }else{
            $("#phoneshow").addClass("disnone");
        }
        var oExtraInfo = extractBookData($self);

        var oBookInfo = {
            'phone' : phoneNumber,
            'name' : sName
        };
        oBookInfo = $.extend({},oBookInfo,oExtraInfo);
        oBookInfo['logined'] = true;
        window.booking.submitBookInfo(oBookInfo,fnCallback);
    })
    //--------------------------------------------------------
    //追加 赎回开始
    $('.submit-login-btn').on('click',function(oEvent){
        var $self = $(".submit-login-btn");
        var oExtractedInfo = extractBookData($self);
        var oBookInfo = $.extend({},oExtractedInfo);
        oBookInfo['logined'] = true;
        var fnCallback = function(oData){
            if(oData.success){
                $(".mn-cover").addClass("disnone");
                $(".pop-appointment").addClass("disnone");
                $(".have-appointment").removeClass("disnone");
                setTimeout(function(){
                    $(".have-appointment").addClass("disnone");
                },2000);
            }else{
                alert(oData.message||'预约失败');
            }
            //TODO should be a popup to notify users.
        };
        window.booking.submitBookInfo(oBookInfo,fnCallback,true);
    });
//预约结束
//--------------------------------------------------------
    function extractBookData($button){
        var id = $button.attr("data-id");
        var bookNumber = parseInt($button.attr('bookNum'));
        var sCategoryType = $button.attr('data-category-type');
        if(!sCategoryType){
            var sURL = window.location.href;
            if(sURL.indexOf('/simu/') !== -1){
                sCategoryType = 'sf_fund_name';
            }else if(sURL.indexOf('/trust/') !== -1){
                sCategoryType = 'trust_short_name';
            }else if(sURL.indexOf('/vcpe/') !== -1){
                sCategoryType = 'pe_short_name';
            }
//            else if(sURL.indexOf('/insurance/') !== -1){
//                type = '香港保险';
//            }
        }
        if(!sCategoryType){
            sCategoryType = '';
        }

        var sTitle = $button.attr('data-title');
        if(!sTitle){
            sTitle = $('title').text();
        }
        var iOrderType = 0;
        if(!!$button.attr('data-order-type')){
            iOrderType = $button.attr('data-order-type');
        }
        return {
            'number' : bookNumber,
            'id' : id,
            'title' : sTitle,
            'categoryType': sCategoryType,
            'orderType' : iOrderType
        };
    }

    $('.mn-popclose').tap(function(){
        $('.mn-cover,.pop-qualified').addClass('disnone');
    });

});

//分享
Zepto(function($){
    $('section').on("click",".click-share",function(){
        $(".share-box,.share-by").toggleClass("disnone");
        return false;
    });
    var config = {};
    var share_obj = new nativeShare('nativeShare',config);
    $('section').on("click",".close-share",function(){
        $(".share-box,.share-by").toggleClass("disnone");
    });

});

var nativeShare = function (elementNode, config) {
    if (!document.getElementById(elementNode)) {
        return false;
    }

    var qApiSrc = {
        lower: "//3gimg.qq.com/html5/js/qb.js",
        higher: "//jsapi.qq.com/get?api=app.share"
    };
    var bLevel = {
        qq: {forbid: 0, lower: 1, higher: 2},
        uc: {forbid: 0, allow: 1}
    };
    var UA = navigator.appVersion;
    var isqqBrowser = (UA.split("MQQBrowser/").length > 1) ? bLevel.qq.higher : bLevel.qq.forbid;
    var isucBrowser = (UA.split("UCBrowser/").length > 1) ? bLevel.uc.allow : bLevel.uc.forbid;
    var version = {
        uc: "",
        qq: ""
    };
    var isWeixin = false;

    config = config || {};
    this.elementNode = elementNode;
    this.url = config.url || document.location.href || '';
    this.title = config.title || document.title || '中投在线';
    this.desc = config.desc || document.title || '';
    this.img = config.img || document.getElementsByTagName('img').length > 0 && document.getElementsByTagName('img')[0].src || '';
    this.img_title = config.img_title || document.title || '';
    this.from = config.from || window.location.host || '';
    this.ucAppList = {
        sinaWeibo: ['kSinaWeibo', 'SinaWeibo', 11, '新浪微博'],
        weixin: ['kWeixin', 'WechatFriends', 1, '微信好友'],
        weixinFriend: ['kWeixinFriend', 'WechatTimeline', '8', '微信朋友圈'],
        QQ: ['kQQ', 'QQ', '4', 'QQ好友'],
        QZone: ['kQZone', 'QZone', '3', 'QQ空间']
    };

    this.share = function (to_app) {
        var title = this.title, url = this.url, desc = this.desc, img = this.img, img_title = this.img_title, from = this.from;
        if (isucBrowser) {
            to_app = to_app == '' ? '' : (platform_os == 'iPhone' ? this.ucAppList[to_app][0] : this.ucAppList[to_app][1]);
            if (to_app == 'QZone') {
                B = "mqqapi://share/to_qzone?src_type=web&version=1&file_type=news&req_type=1&image_url="+img+"&title="+title+"&description="+desc+"&url="+url+"&app_name="+from;
                k = document.createElement("div"), k.style.visibility = "hidden", k.innerHTML = '<iframe src="' + B + '" scrolling="no" width="1" height="1"></iframe>', document.body.appendChild(k), setTimeout(function () {
                    k && k.parentNode && k.parentNode.removeChild(k)
                }, 5E3);
            }

            if (typeof(ucweb) != "undefined") {
                ucweb.startRequest("shell.page_share", [title, title, url, to_app, "", "@" + from, ""])
            } else {
                if (typeof(ucbrowser) != "undefined") {
                    ucbrowser.web_share(title, title, url, to_app, "", "@" + from, '')
                } else {
                }
            }

        } else {
            if (isqqBrowser && !isWeixin) {
                to_app = to_app == '' ? '' : this.ucAppList[to_app][2];
                var ah = {
                    url: url,
                    title: title,
                    description: desc,
                    img_url: img,
                    img_title: img_title,
                    to_app: to_app,//微信好友1,腾讯微博2,QQ空间3,QQ好友4,生成二维码7,微信朋友圈8,啾啾分享9,复制网址10,分享到微博11,创意分享13
                    cus_txt: "请输入此时此刻想要分享的内容"
                };
                ah = to_app == '' ? '' : ah;
                if (typeof(browser) != "undefined") {
                    if (typeof(browser.app) != "undefined" && isqqBrowser == bLevel.qq.higher) {
                        browser.app.share(ah)
                    }
                } else {
                    if (typeof(window.qb) != "undefined" && isqqBrowser == bLevel.qq.lower) {
                        window.qb.share(ah)
                    } else {
                    }
                }
            } else {
                to_app = to_app == '' ? '' : this.ucAppList[to_app][1];
                if(to_app == "SinaWeibo"){
                    var param = {
                        url:url,
                        type:'3',
                        count:'1', /**是否显示分享数，1显示(可选)*/
                        appkey:'', /**您申请的应用appkey,显示分享来源(可选)*/
                        title:title, /**分享的文字内容(可选，默认为所在页面的title)*/
                        ralateUid:'', /**关联用户的UID，分享微博会@该用户(可选)*/
                        rnd:new Date().valueOf()
                    };
                    var temp = [];
                    for( var p in param ){
                        temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
                    }
                    var target_url = "http://service.weibo.com/share/share.php?"+temp.join('&');
                    window.open(target_url,'sinaweibo');
                }else if(to_app == "QZone"){
                    var p = {
                        url:url,
                        showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
                        desc:'',/*默认分享理由(可选)*/
                        summary:'',/*分享摘要(可选)*/
                        title:title,/*分享标题(可选)*/
                        site:'',/*分享来源 如：腾讯网(可选)*/
                    };
                    var s = [];
                    for(var i in p){
                        s.push(i + '=' + encodeURIComponent(p[i]||''));
                    }
                    var shareURL = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?'+s.join('&');
                    window.open(shareURL,'newwindow');
                }else if(to_app == "QQ"){
                    var p = {
                        url:url,
                        description:'',/*默认分享理由(可选)*/
                        title:title,/*分享标题(可选)*/
                    };
                    var s = [];
                    for(var i in p){
                        s.push(i + '=' + encodeURIComponent(p[i]||''));
                    }
                    var shareURL = 'http://connect.qq.com/widget/shareqq/index.html?'+s.join('&');
                    window.open(shareURL,'newwindow');
                }
            }
        }
    };

    this.ucQQhtml = function() {
        var position = document.getElementById(this.elementNode);
        var html = "";
        html += "<div class=\"share-by disnone\"><\/div>\n";
        html += "<div class=\"share-box disnone\">\n";
        html += "	<div class=\"share-mnc clearfix\">\n";
        html += "		<p class=\"f24 col68 ml10 mt10 mb20\">分享到<\/p>\n";
        html += "		<div class=\"share-lst tac fl\">\n";
        html += "			<a href=\"javascript:void(0);\" class=\"nativeShare weixin\" data-app=\"weixin\">\n";
        html += "				<span class=\"icon-wx\"><\/span>\n";
        html += "				<p class=\"f30 col222 mt20 mb20\">微信好友<\/p>\n";
        html += "			<\/a>\n";
        html += "		<\/div>\n";
        html += "		<div class=\"share-lst tac fl\">\n";
        html += "			<a href=\"javascript:void(0);\" class=\"nativeShare weixin_timeline\" data-app=\"weixinFriend\">\n";
        html += "				<span class=\"icon-pyq\"><\/span>\n";
        html += "				<p class=\"f30 col222 mt20 mb20\">朋友圈<\/p>\n";
        html += "			<\/a>\n";
        html += "		<\/div>\n";
        html += "		<div class=\"share-lst tac fl\">\n";
        html += "			<a href=\"javascript:void(0);\" class=\"nativeShare qq\" data-app=\"QQ\">\n";
        html += "				<span class=\"icon-QQ\"><\/span>\n";
        html += "				<p class=\"f30 col222 mt20 mb20\">QQ好友<\/p>\n";
        html += "			<\/a>\n";
        html += "		<\/div>\n";
        html += "	<\/div>\n";
        html += "	<p class=\"f40 mt20 tac share-hide close-share\">取消<\/p>\n";
        html += "<\/div>\n";
        position.innerHTML = html;
    };

    this.otherhtml = function() {
        var position = document.getElementById(this.elementNode);
        var html = "";
        html += "<div class=\"share-by disnone\"><\/div>\n";
        html += "<div class=\"share-box disnone\">\n";
        html += "	<div class=\"share-mnc clearfix\">\n";
        html += "		<p class=\"f24 col68 ml10 mt10 mb20\">分享到<\/p>\n";
        html += "		<div class=\"share-lst tac fl\">\n";
        html += "			<a href=\"javascript:void(0);\" class=\"nativeShare weibo\" data-app=\"sinaWeibo\">\n";
        html += "				<span class=\"icon-wb\"><\/span>\n";
        html += "				<p class=\"f30 col222 mt20 mb20\">微博<\/p>\n";
        html += "			<\/a>\n";
        html += "		<\/div>\n";
        /*		html += "		<div class=\"share-lst tac fl\">\n";
         html += "			<a href=\"javascript:void(0);\" class=\"nativeShare weixin_timeline\" data-app=\"weixinFriend\">\n";
         html += "				<span class=\"icon-pyq\"><\/span>\n";
         html += "				<p class=\"f30 col222 mt20 mb20\">朋友圈<\/p>\n";
         html += "			<\/a>\n";
         html += "		<\/div>\n";*/
        html += "		<div class=\"share-lst tac fl\">\n";
        html += "			<a href=\"javascript:void(0);\" class=\"nativeShare qq\" data-app=\"QQ\">\n";
        html += "				<span class=\"icon-QQ\"><\/span>\n";
        html += "				<p class=\"f30 col222 mt20 mb20\">QQ好友<\/p>\n";
        html += "			<\/a>\n";
        html += "		<\/div>\n";
        html += "	<\/div>\n";
        html += "	<p class=\"f40 mt20 tac share-hide close-share\">取消<\/p>\n";
        html += "<\/div>\n";
        position.innerHTML = html;
    };

    this.isloadqqApi = function () {
        if (isqqBrowser) {
            var b = (version.qq < 5.4) ? qApiSrc.lower : qApiSrc.higher;
            var d = document.createElement("script");
            var a = document.getElementsByTagName("body")[0];
            d.setAttribute("src", b);
            a.appendChild(d)
        }
    };

    this.getPlantform = function () {
        ua = navigator.userAgent;
        if ((ua.indexOf("iPhone") > -1 || ua.indexOf("iPod") > -1)) {
            return "iPhone"
        }
        return "Android"
    };

    this.is_weixin = function () {
        var a = UA.toLowerCase();
        if (a.match(/MicroMessenger/i) == "micromessenger") {
            return true
        } else {
            return false
        }
    };

    this.getVersion = function (c) {
        var a = c.split("."), b = parseFloat(a[0] + "." + a[1]);
        return b
    };

    this.init = function () {

        platform_os = this.getPlantform();
        version.qq = isqqBrowser ? this.getVersion(UA.split("MQQBrowser/")[1]) : 0;
        version.uc = isucBrowser ? this.getVersion(UA.split("UCBrowser/")[1]) : 0;
        isWeixin = this.is_weixin();
        if ((isqqBrowser && version.qq < 5.4 && platform_os == "iPhone") || (isqqBrowser && version.qq < 5.3 && platform_os == "Android")) {
            isqqBrowser = bLevel.qq.forbid
        } else {
            if (isqqBrowser && version.qq < 5.4 && platform_os == "Android") {
                isqqBrowser = bLevel.qq.lower
            } else {
                if (isucBrowser && ((version.uc < 10.2 && platform_os == "iPhone") || (version.uc < 9.7 && platform_os == "Android"))) {
                    isucBrowser = bLevel.uc.forbid
                }
            }
        }
        this.isloadqqApi();
        if (isqqBrowser || isucBrowser) {
            this.ucQQhtml();
        } else {
            this.otherhtml();

            //document.write('目前该分享插件仅支持手机UC浏览器和QQ浏览器');
        }
    };

    this.init();

    var share = this;
    var items = document.getElementsByClassName('nativeShare');
    for (var i=0;i<items.length;i++) {
        items[i].onclick = function(){
            share.share(this.getAttribute('data-app'));
        }
    }

    return this;
};




