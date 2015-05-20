justRowsThemesConfig['classic'] = {
	'options': {
			'caption-height-zero' : false,
			'margin' : 10
		},
	'init-callback': false,
	'append-callback': false
};

jQuery(document).ready(function($) {

	$('.justrows-theme-classic')
		.on('mouseenter', '.jr-element', function(){
			$caption = $(this).children('.jr-caption');
			$caption.stop().animate(
				{
					'height' : parseInt($caption.attr('data-jr-caption-height')) + 20, // (height + padding-top + padding-bottom)
					'padding-top' : 10,
					'padding-bottom' : 10
				},
				400
			);
		})
});
