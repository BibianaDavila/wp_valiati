jQuery(window).bind("scroll", function() {
    var headerheight = jQuery('header').height();
    var navbar = jQuery('.navbar').height();


});

jQuery(document).ready(function($) {
    
    /* altura da tela */
    var windowHeight = $(window).outerHeight(true);

    /* calcula altura mínima do conteúdo para preencher a tela */
    var footerHeight = $('.footer').outerHeight(true),
        contentHeight = $('.container-custom').outerHeight(true),
        minContentHeight = windowHeight- ((footerHeight!=undefined)?footerHeight:0);

    /* atualiza o tamanho do conteúdo */

    if(contentHeight>minContentHeight){
        $('.container-height').css('min-height',contentHeight+100);
    }else{
        $('.container-height').css('min-height',minContentHeight);
    }

    /* ao redimensionar a pag, também */
    $(window).resize(function(){
        
        /* altura da tela */
        var windowHeight = $(window).outerHeight(true);

        /* calcula altura mínima do conteúdo para preencher a tela */
        var footerHeight = $('.footer').outerHeight(true),
            minContentHeight = windowHeight- ((footerHeight!=undefined)?footerHeight:0);

            console.log('footer:::'+footerHeight);
            console.log('window:::'+windowHeight);
            console.log(minContentHeight);

        /* atualiza o tamanho do conteúdo */
        $('.container-page').css('min-height',minContentHeight);

    });


    $('a[href^="#"]').click(function(){

    var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 'slow');

    return false;});
    
    var windowheight = jQuery(window).height();
    var bannerheight = jQuery('.frontpage-banner').height();
    var subpagebannerheight = jQuery('.subpage-banner').height();
    var bannerpadding = ((windowheight-bannerheight)/3);
    if (bannerpadding < 100) {
        bannerpadding = 100;
    }
    var subbannerpadding = ((windowheight-subpagebannerheight)/6);
    if (subbannerpadding < 100) {
        subbannerpadding = 100;
    }    
    jQuery('.frontpage-banner').css({ "padding-top": bannerpadding+75 });
    jQuery('.frontpage-banner').css({ "padding-bottom": bannerpadding });
    jQuery('.subpage-banner').css({ "padding-top": subbannerpadding });
    jQuery('.subpage-banner').css({ "padding-bottom": subbannerpadding });
    
    jQuery("html").niceScroll({
		cursorcolor: "#1a1a1a",
		cursorborder: "#1a1a1a",
		cursoropacitymin: 0.2,
		cursorwidth: 5,
		zindex: 10,
		scrollspeed: 60,
		mousescrollstep: 40
	});
		
	window.sr = new scrollReveal();
	
	var navbar = jQuery('.navbar').height();
	jQuery('body').scrollspy({ 
		target: '.navbar-collapse',
	    offset: navbar
	});

    jQuery('a.scrolltrue').bind('click', function(event) {
    	event.preventDefault();
        var $href = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery($href.attr('href')).offset().top
        }, 1000, 'easeInOutQuad');
    });	    
});		