Zepto(function($){
	
	//Swiper
	new Swiper('.news-vip-swiper', {
            pagination: '.pagination1',
            loop:true,
            paginationClickable: true,
            autoplayDisableOnInteraction:false,
            autoplay :5000
        });
    new Swiper('.review-swiper', {
            loop:false,
           // paginationClickable: true,
		   slidesPerView : '3.5',
		  //spaceBetween : '10%',
		   grabCursor : true,
            autoplayDisableOnInteraction:false
        });
    
    
    function prodetail(obj){
    	$(obj).on('tap',function (){
    		if( $(this).hasClass('on')  ){
    			$(this).removeClass('on');
    		}else{
    			$(this).addClass('on').siblings().removeClass('on');
    		}
    	})
    }
    prodetail('.news-prodetail-module');
    prodetail('.encyclopedia-top-doc');
    
    setTab($('.hot-topics-box'), '.hot-topics-lst span', '.hot-topics-mnc', 'on', null, 'tap',false);
    setTab($('.review-box'), '.review-swiper li', '.review-lst', 'on', null, 'tap',false);
	
	
        
});

   
	
	
	
	




	
	
