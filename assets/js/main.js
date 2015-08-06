var mobileWindowWidth = 900;

jQuery(document).ready(function() {

  //Smooth anchor link scroll
  jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

	//Bring out and remove the main nav
	jQuery('.hamburger, a.close').on('click',function(event) {
		event.preventDefault();
		jQuery('nav.main-nav,header,.navbar,footer').toggleClass('menu-is-open');
		jQuery('main').toggleClass('menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			jQuery('body').toggleClass('overflow-hidden');
		});
	});

	//If user clicks outside the navbar then close the navbar.
	// jQuery('html').on('click',function(event) {
	// 	if( jQuery('body').hasClass('overflow-hidden') ) {
	// 		//console.log(jQuery(event.target).parent())
	// 		if(!jQuery(event.target).parent().is('li.menu-item,ul.full-nav,div.navbar-details,div.menu-main-menu-container'))
	// 		{
	// 			jQuery('nav.main-nav,header,.navbar,footer').toggleClass('menu-is-open');
	// 			jQuery('main').toggleClass('menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
	// 				jQuery('body').toggleClass('overflow-hidden');
	// 			});
	// 		}
	// 	}
	// });

	//Drop down main nav 'item has children'
	jQuery('.menu-item-has-children > a').on('click',function(event) {
		event.preventDefault();

		jQuery(this).parent()
			.addClass('active')
			.siblings('.menu-item-has-children')
			.children('a')
			.next('ul.sub-menu')
			.each(function() {
				if( jQuery(this).is(':visible') && jQuery(this).parent().hasClass('current_page_parent') ) {
					jQuery(this).parent().addClass('rotate').removeClass('active');
				}
				jQuery(this).slideUp().parent().removeClass('active')
			})
		.end();

		jQuery(this).siblings('ul').slideToggle(500).end();
	});

	//Show child lists if they are the current page item
	jQuery('.menu-item-has-children').each(function() {
		if(jQuery(this).hasClass('current-page-parent') || jQuery(this).hasClass('current-menu-item'))
		{
			jQuery(this).children('ul.sub-menu').show();
		}
	});

	//Show / hide the foundation bar - NEEDS WORK
	jQuery('.foundation-bar-button').on('click',function(event) {

		jQuery('#navbar').fadeToggle(300);

		jQuery('.foundation-bar-button p').toggleClass('open')

		if(!jQuery('body').hasClass('overflow-hidden'))
		{
			jQuery('.foundation-bar-hidden-overflow').css({
				'height':jQuery(window).height(),
				'overflow':'auto',
			})

			jQuery('html, body').animate({
			        scrollTop: jQuery('.foundation-bar-hidden-overflow').offset().top
			     }, 300, function() {
			    	jQuery('body').addClass('overflow-hidden');
			 });

		}
		else
		{
			
			jQuery('body').removeClass('overflow-hidden');

			jQuery('.foundation-bar-hidden-overflow').css({'overflow':'hidden'}).animate({
						'height':jQuery('.foundation-bar-and-button').height()
			})
			
			jQuery('.foundation-footer').slideDown( function() {
				
			})

		}

	});
	
	//Open Mobile content-page menu
	jQuery('.content-left-nav button').on('click', function(event) {
		event.preventDefault();
		jQuery(this).children('.bg').toggleClass('spin');
		jQuery('.content-left-nav ul.secondary-menu').slideToggle();
		if(jQuery(this).children('.bg').hasClass('spin'))
		{
			jQuery('ul.secondary-menu > li.item-has-submenu').each( function() {
				jQuery(this).animate({'opacity':1});
			});
		}
		else 
		{
			jQuery('ul.secondary-menu > li.item-has-submenu').each( function() {
				jQuery(this).animate({'opacity':0});
			});
		}
		
	});

	//Open Mobile content-page menu sub-menu
	jQuery('ul.secondary-menu > li.item-has-submenu').on('click', function(event) {
		event.preventDefault();
		jQuery(this).toggleClass('spin');
		jQuery(this).children('ul.sub-menu').slideToggle();
	});

	//Landing page video stuff
	jQuery('a.play-video-link').on('click', function(event) {
		event.preventDefault();
		var video = jQuery('.external-landing-video');
		video.detach();
		jQuery(video).children('.landing-page-iframe')
			.css({
				'height':(jQuery(window).width() * 0.9) / 1.8 +'px',
				'width':jQuery(window).width() * 0.9 +'px',
				'left':(jQuery(window).width() * 0.1) / 2 +'px',
				'top':(jQuery(window).height() - ((jQuery(window).width() * 0.9) / 1.8)) / 2 +'px',
			});
		jQuery('.overlay').css({'height':(jQuery(document).height()+'px')}).fadeIn('fast').append(video);
		video.fadeIn('fast');
		jQuery('body').toggleClass('overflow-hidden');
	})

	jQuery('.overlay').on('click', function() {
		jQuery(this).fadeOut();
		jQuery('body').toggleClass('overflow-hidden');
	})

});

jQuery(window).scroll(function() {


	if (jQuery(window).width() < mobileWindowWidth) {
		//small window logic
		if( jQuery(this).scrollTop() > jQuery('#logo').outerHeight() ) {
			var bar = jQuery('.navbar');
			bar.detach();
	    	jQuery('#navbar').append(bar);
			jQuery('.navbar').addClass('fixed');
		} else {
			var bar = jQuery('.navbar');
			bar.detach();
		    jQuery('header').append(bar);
		    jQuery('.navbar').removeClass('fixed');
		}

	} /* else {
		
		//large window logic
		if(jQuery(this).scrollTop() > 400 && !jQuery('.navbar').hasClass('fixed')) 	{

       		var bar = jQuery('.navbar');
       		bar.addClass('fixed');
       		bar.css('top','-70px');
       		bar.css('z-index','1');
			bar.detach();
			jQuery('#navbar').append(bar);
			jQuery(bar).animate({'top':'0px'},300)

    	} else if (jQuery(this).scrollTop() < 400 && jQuery('.navbar').hasClass('fixed') ) {
    		
    		var bar = jQuery('.navbar');
    		bar.removeClass('fixed');
    		jQuery(bar).animate({'top':'-70px'},600,function() {
    			bar.removeClass('fixed');
				bar.detach();
				bar.css({'top':'-70px'})
				jQuery('header').append(bar)
				jQuery(bar).animate({'top':'0px'},100)
    		});

       	}
	}*/
  
});

imagesLoaded( document.querySelector('body'), function( instance ) {
  
});


imagesLoaded( document.querySelector('body'), function( instance ) {
	jQuery(".two-bg").css({'height':(jQuery(".two-bg").siblings().outerHeight()+'px')});
	jQuery(".two-bg-landing").css({'height':(jQuery(".two-bg-landing").parent().siblings().outerHeight() / 2 +'px')});
	jQuery(".two-news-thumbnail").css({'height':(jQuery(".two-news").outerHeight()+'px')});
	
	if (jQuery(window).width() > mobileWindowWidth) {
		jQuery(".news-navigation").css({'height':(jQuery('.news-landing-main').parent().outerHeight()+'px')});
		jQuery(".intro-page-bottom-headline").css({'height':(jQuery(".intro-page-bottom-main").siblings().outerHeight()+'px')});
		jQuery(".four.long .news-item-small").css({'height':(jQuery(".four-2").outerHeight()+'px')});
	}
});


/****Automatically track outbound links****/
/*
The best method of "auto-tracking" outgoing links is to automatically 
detect outbound links with JavaScript when they are clicked, and 
automatically track it as an event. The method below uses a "hitCallback"
function that, once the click has been registered with Analytics, the
link is opened. This prevents the situation whereby the browser
starts opening the new page before Analytics has had a chance to register the click.
*/
function _gaLt(event){
    var el = event.srcElement || event.target;

    /* Loop up the DOM tree through parent elements if clicked element is not a link (eg: an image inside a link) */
    while(el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href)){
        el = el.parentNode;
    }

    if(el && el.href){
        /* link */
        var link = el.href;
        if(link.indexOf(location.host) == -1 && !link.match(/^javascript\:/i)){ /* external link */
            /* HitCallback function to either open link in either same or new window */
            var hitBack = function(link, target){
                target ? window.open(link, target) : window.location.href = link;
            };
            /* Is target set and not _(self|parent|top)? */
            var target = (el.target && !el.target.match(/^_(self|parent|top)$/i)) ? el.target : false;
            /* send event with callback */
            ga(
                "send", "event", "Outgoing Links", link,
                document.location.pathname + document.location.search,
                {"hitCallback": hitBack(link, target)}
            );

            /* Prevent standard click */
            event.preventDefault ? event.preventDefault() : event.returnValue = !1;
        }

    }
}

/* Attach the event to all clicks in the document after page has loaded */
var w = window;
w.addEventListener ? w.addEventListener("load",function(){document.body.addEventListener("click",_gaLt,!1)},!1)
 : w.attachEvent && w.attachEvent("onload",function(){document.body.attachEvent("onclick",_gaLt)});





