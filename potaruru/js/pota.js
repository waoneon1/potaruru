/**
 * Custom JS
 */

// Video Auto Resize 
( function() {
	var $allVideos = $("iframe[src*='player.vimeo.com'], iframe[src*='youtube.com'], object, embed"),
    $fluidEl = $(".post-single");
    console.log($fluidEl.width());
	$allVideos.each(function() {
	  $(this)
	    // jQuery .data does not work on object/embed elements
	    .attr('data-aspectRatio', this.height / this.width)
	    .removeAttr('height')
	    .removeAttr('width');
	});

	$(window).resize(function() {
		var newWidth = $fluidEl.width();
		$allVideos.each(function() {

			var $el = $(this);
			$el
			.width(newWidth)
			.height(newWidth * $el.attr('data-aspectRatio'));
		});
	}).resize();

} )();
