(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		jQuery('.gallery a').each(function() {
			jQuery(this).attr({'data-lightbox':'galeria'});
		});

		jQuery('ul.slider').bxSlider({
			mode: 'fade',
			pager:false
		});

		jQuery('.single-tours header nav ul li:contains("Tours")').addClass('current_page_item');

		jQuery('.single-post header nav ul li:contains("Consejos")').addClass('current_page_item');
	});
	
})(jQuery, this);
