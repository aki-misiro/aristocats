/**
 * dropdownコントロール
 */
(function($){
	/* hamburger menu */
	function removeMenu($shade){
		$shade
		.remove();
		$('#js-slidemenu').slideUp('fast');
	}
	$('#slidemenu-btn').on('click', function(e){
		e.preventDefault();
		$(this).addClass('active');
		var $shade = $('.js-slidemenu-effect')[0];
		if($shade === undefined) {
			$('<div>')
			.addClass('js-slidemenu-effect')
			.on('click', function(){
				removeMenu(this);
				$('#slidemenu-btn').removeClass('active');
			})
			.appendTo($('body'));
			$('#js-slidemenu').slideDown('fast');
		} else {
			removeMenu($shade);
			$('#slidemenu-btn').removeClass('active');
		}
	});
	/* smooth scroll */
	$('a.footer-gotop').on('click', function(event){
		event.preventDefault();
		var $this = $(this);
		var linkTo = $this.attr('href');
		var $target;
		var offset = 0;
		var pos = 0;
		if(linkTo != '#top'){
			$target = $(linkTo);
			//offset = $target.data('offsettop');
			pos = $target.offset().top - offset;
		}
		$('html,body').animate({scrollTop: pos}, 400);
	});
})(jQuery);