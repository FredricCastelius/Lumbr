// fit those vids, its a responsive world !
$("body").fitVids(); 

// removes all empty p tags for perfect content
$('p').each(function(){
   var value = $.trim($(this).html());
   if(value == '&nbsp;'){
       $(this).addClass('pagebreak');
   }
});

// removes all empty p tags for perfect content
$('h1').each(function(index, item) {
   if($.trim($(item).text()) === "") {
       $(item).replaceWith('<p class="pagebreak">&nbsp;</p>');
   }
});
$('h2').each(function(index, item) {
   if($.trim($(item).text()) === "") {
       $(item).replaceWith('<p class="pagebreak">&nbsp;</p>');
   }
});$('h3').each(function(index, item) {
   if($.trim($(item).text()) === "") {
       $(item).replaceWith('<p class="pagebreak">&nbsp;</p>');
   }
});$('h4').each(function(index, item) {
   if($.trim($(item).text()) === "") {
       $(item).replaceWith('<p class="pagebreak">&nbsp;</p>');
   }
});$('h5').each(function(index, item) { 
   if($.trim($(item).text()) === "") {
       $(item).replaceWith('<p class="pagebreak">&nbsp;</p>');
   }
});$('h6').each(function(index, item) {
   if($.trim($(item).text()) === "") {
       $(item).replaceWith('<p class="pagebreak">&nbsp;</p>');
   }
});

// fade out on main content when click
$("li a").click(function() {
    $(".post").addClass("fadeOut");
});

//
$(function() {
    $(window).resize(function() {
        $('body:last').height($(window).height() - $('body:last').offset().top);
    });
    $(window).resize();
});

// check for svg and png for fallback
svgeezy.init(false, 'png'); // this will let the plugin check all images