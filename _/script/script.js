// Fit the embedded videos
$("body").fitVids(); 

// Fitted headers
$("#hero #title").fitText(1);
$("#sub-title").fitText(1.5);
// $(".fitHeading").fitText();
// $(".fitHeading3").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });

//
$(function() {
    $(window).resize(function() {
        $('body:last').height($(window).height() - $('body:last').offset().top);
    });
    $(window).resize();
});