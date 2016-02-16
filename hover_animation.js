/*メニューバウンス*/
$(function(){
    setTimeout(function(){
		var w = $(window).width();
		var x = 768;
		if (w > x) {
			$('.navbar-nav li a').hover(function(){
				if( !$(this).hasClass('bounce animated') ) {
					$(this).addClass('bounce animated');
					//thisを変数化して渡す
					var self = this ;
					setTimeout(function(){
						console.log($(self) ) ;
						$(self).removeClass('bounce animated');
					},1000);
				}
			});
		}
    },2000);
});
