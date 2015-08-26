/*
 :::  FancyBox
-------------------------------------------------- */
$(document).ready(function(){
$(".fancybox")
//     .attr('rel', 'gallery')
    .fancybox({
        padding : 0,
        margin  : 50,
        closeBtn : false,
       
        maxWidth       : '1000',
		maxHeight      : '100%',
		
        nextEffect : 'none',
        prevEffect : 'none',
       	openEffect  : 'none',
		closeEffect : 'none', 
        autoCenter : false,
        
    });
}); 

/*
 :::  FancyBox-Video
-------------------------------------------------- */
$(document).ready(function() {
	$('.fancybox-media').fancybox({
		padding    : 0,
        margin  : 50,
        closeBtn : false,

		width       : '1000',
		height      : '560',
		autoSize: true,
		aspectRatio : true,
		openEffect  : 'none',
		closeEffect : 'none',

        helpers : {
        media : {
        }
    	}
		

	});
});

/*
 :::  Lazyload
-------------------------------------------------- */
$("img.lazy").lazyload({
  event: "scrollstop"
//   effect : "fadeIn"
});

/*
 :::  Scroll to top
-------------------------------------------------- */
$(document).ready(function(){
	// hide #back-top first
	$("#back-top").hide();
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 200);
			return false;
		});
	});
});