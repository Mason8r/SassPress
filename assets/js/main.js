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

  jQuery('.home-tile__cross').on('click', function(e) {
    e.preventDefault();
    var image = jQuery(this).parent().parent().children('.home-tile__image');
    var text = jQuery(this).parent().children('.home-tile__text');
    var link = jQuery(this).parent().children('.home-tile__link');
    var rubineBox = jQuery(this).parent().parent().children('.home-tile__popup');

    console.log('clicked')
    jQuery(this).children().toggleClass('open').toggleClass('closed')
    text.toggleClass('hide')
    link.toggleClass('hide')
    rubineBox.toggleClass('closed')
    if(!jQuery(rubineBox).hasClass('closed')) {
      text.children('p').animate({
          opacity:1,
          fontSize:14
       })
      text.children('h3').animate({
          opacity:1,
          fontSize:18
       })
      rubineBox.animate({
        height:(image.height() - 36) + 'px',
        width:(image.width() - 36) + 'px'
      });
      
      link.animate({
        opacity: 1,
      })

    } else {
      rubineBox.animate({
        height:'18px',
        width:'18px'
      });
      link.animate({
        opacity: 0,
      })
      text.children('p,h3').animate({
        opacity:0,
        fontSize:0
      })
    }
  })

  var pull        = jQuery('#menu-open');  
      menu        = jQuery('#menu');  
      button      = jQuery('#menu a');  
      shut        = jQuery('#menu-close'); 
      menuHeight  = menu.height();  

  jQuery(pull).on('click', function(e) {  
      e.preventDefault();  
      menu.slideToggle(); 
  });  

  jQuery(shut).on('click', function(e) {  
      e.preventDefault();  
      menu.slideUp(); 
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
      }).attr("src", jQuery(video).children('.landing-page-iframe').attr("src")+"?autoplay=1");

    jQuery('.overlay').css({'height':(jQuery(document).height()+'px')}).fadeIn('fast').append(video);
    video.fadeIn('fast');
    jQuery('body').toggleClass('overflow-hidden');

  })

  jQuery('.overlay').on('click', function() {
    jQuery(this).fadeOut();
    jQuery('body').toggleClass('overflow-hidden');
    jQuery('.external-landing-video').children('.landing-page-iframe').each(function(){
      jQuery(this).stopVideo();
    });
  }) 

});









