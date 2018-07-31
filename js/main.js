(function() {
	var navEl = $('.top-nav'), isFixed = false, top = navEl.offset().top;
	$(window).scroll(function() {
		if( $(this).scrollTop() > top ) {
			if(!isFixed) {
				navEl.addClass('fixed');
				isFixed = true;
			}
		} else {
			if(isFixed) {
				navEl.removeClass('fixed');
				isFixed = false;
			} 
		}
	});
})();