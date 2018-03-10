Zepto(function($){
    //键盘搜索
    $('#keyboardSearch').bind('search', function () {
        var search = $("input[name='search']").val();
        window.location.href="/search/search.html?search="+search;
    });
	//首页banner
	new Swiper('.home-swiper', {
            pagination: '.pagination1',
            loop:true,
            paginationClickable: true,
            autoplayDisableOnInteraction:false,
            // autoplay :5000
        });
    
    //首页会员加息
	new Swiper('.home-vipIncreases-swiper', {
            loop:false,
           // paginationClickable: true,
		   slidesPerView : 1.5,
		   spaceBetween : '2.5%',
		   grabCursor : true,
            autoplayDisableOnInteraction:false
        });
	
	//首页搜索
	setTab($('.lstTabMnc'), '.ss-result-lstTab p', '.ss-result-lstBox', 'on', null, 'tap');
	
	/* $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        //加载事件
        function pscroll(){
        	var $List=$('.ss-result-lst');
        	var Load=$('.ss-result-lst-load');
			if($List.find('li').length <= 10){
				Load.show();
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

    //关于我们
    new Swiper('.home-honor-swiper', {
        loop:false,
        // paginationClickable: true,
        slidesPerView : 2.31,
        spaceBetween : '2.78%',
        grabCursor : true,
        autoplayDisableOnInteraction:false
    });
    
});

   
	
	
	
	




	
	
