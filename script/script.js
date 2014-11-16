// Fit the embedded videos

$("body").fitVids(); 

// Responsive headings

//$("#hero h1").fitText(1);
//$("#sub-title").fitText(1.5);
//$(".fitHeading").fitText();
//$(".fitHeading3").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });

// Smooth scroll

smoothScroll.init({
  speed: 1000,
  easing: 'easeInOutCubic',
  offset: 0,
  updateURL: true,
  callbackBefore: function ( toggle, anchor ) {},
  callbackAfter: function ( toggle, anchor ) {}
});

(function($) {
	$(function() {
		$('.dropdown button').click(function () {
            $('.dropdown button').toggleClass('open');
        });
	});
})(jQuery);