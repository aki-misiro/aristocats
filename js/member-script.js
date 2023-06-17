'use strict';

document.getElementById('form').select.onchange = function() {
   location.href = document.getElementById('form').select.value;
};

/* ゆる魂用 */
document.getElementById('form-yuru').select.onchange = function() {
	location.href = document.getElementById('form-yuru').select.value;
};

$(function(){
	$('.tab-menu')
	.on('click', 'li > a', function(event){
		event.preventDefault();
		var $this = $(this);
		$this.parent().siblings()
		.removeClass('selected')
		.end()
		.addClass('selected');

		var tabId = $this.data('tabid');
		$this.closest('.tab').find('.tab-contents').children()
		.each(function(){
			var $content = $(this);
			if($content.data('contentid') == tabId) {
				$content.removeClass('hidden');
			} else {
				$content.addClass('hidden');
			}
		});
	});
});