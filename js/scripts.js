$(document).ready(function(){
	"use strict"; 
	
	// Disable default behaviour for links that have # only as href
	
	$('a').click(function() {
        if ($(this).attr('href') === '#') {
            return false;
        }
    });
    
	// TweenMAX Scroll
	
	if (navigator.appVersion.indexOf("Win")!=-1){
		if(navigator.userAgent.toLowerCase().indexOf('chrome') > -1){
			$(function(){	

				var $window = $(window);
				var scrollTime = 0.4;
				var scrollDistance = 350;

				$window.on("mousewheel DOMMouseScroll", function(event){

					event.preventDefault();	

					var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
					var scrollTop = $window.scrollTop();
					var finalScroll = scrollTop - parseInt(delta*scrollDistance);

					TweenMax.to($window, scrollTime, {
						scrollTo : { y: finalScroll, autoKill:true },
							ease: Power1.easeOut,
							overwrite: 5							
						});

				});
			});
		}
	}
	
	// Open responsive menu
	
	$('.mobile-toggle').click(function(){
		$('nav').toggleClass('open-menu');
	});
		
	// Append .background-image-holder <img>'s as CSS backgrounds
	
	$('.background-image-holder').each(function(){
		var imgSrc= $(this).children('img').attr('src');
		$(this).css('background', 'url("' + imgSrc + '")');
    	$(this).children('img').hide();
        $(this).css('background-position', '50% 50%');
	});
	
	$('.foreground-image-holder').each(function(){
		var imgSrc= $(this).children('img').attr('src');
		$(this).css('background', 'url("' + imgSrc + '")');
    	$(this).children('img').hide();
        $(this).css('background-position', '50% 50%');
	});
	
	// Initialize YT player for youtube backgrounds
	
	$('.ytplayer').each(function(){
		var vidID = $(this).attr('data-video-id');
		$(this).attr('data-property','{videoURL:\''+vidID+'\',containment:\'.video-holder\',autoPlay:true, mute:true, startAt:28,opacity:1}');
	});
	
	
	// Background for nav-1 and nav-2 once scrolled
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 0){
			$('nav').addClass('scrolled');
		}else{
			$('nav').removeClass('scrolled');
		}
	});
	
	// Set the height of the nav container to avoid jank on relative nav
	
	if($('nav').hasClass('relative-nav')){
		$('.nav-container').css('height', $('nav').outerHeight());
	}
		
	// Trigger menu toggle on nav-2
	
	$('.nav-2 .menu-toggle').click(function(){
		$(this).toggleClass('form-cross');
		$(this).closest('nav').find('.menu').toggleClass('expand');
	});
	
	$('.nav-3 .menu-toggle').click(function(){
		$(this).toggleClass('form-cross');
		$(this).closest('nav').find('.fullscreen-container').toggleClass('expand');
		setTimeout(function(){
			$('.fullscreen-container .vertical-align').toggleClass('show-menu');
		}, 300);
	});
	
	// Disable default behaviour for dummy links
	
	$('a').click(function(){
		if($(this).attr('href') == '#'){
			return false;
		}
	});
	
	// Nav Search input trigger
	
	$('.search-bar i').click(function(){
		$(this).closest('.search-bar').find('input[type="text"]').focus();
		if($(this).closest('.search-bar').find('input[type="text"]').val()){
			$(this).closest('.search-bar').find('input[type="submit"]').trigger('click');
		}
	});
	
	// Expanding Lists
	
	$('.expanding-list .title').click(function(){
		$(this).closest('li').toggleClass('active');
	});
	
	// Quantity control for products
	
	$('.add-to-cart .less').click(function(){
		if($(this).closest('form').find('input[type="text"]').val() >= 1){
			var newVal = parseInt($(this).closest('form').find('input[type="text"]').val()) - 1;
			$(this).closest('form').find('input[type="text"]').val(newVal);
		}
	});
	
	$('.add-to-cart .more').click(function(){
		var newVal = parseInt($(this).closest('form').find('input[type="text"]').val()) + 1;
		$(this).closest('form').find('input[type="text"]').val(newVal);
	});
    
    if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
        skrollr.init({
            forceHeight: false
        });
        
        // Fixed header scrolling
		
		$(window).scroll(function(){
			if($(window).scrollTop() < $('.fixed-header').outerHeight()){
				var scroll = $(window).scrollTop();
				$('.fixed-header').css({transform: 'translateY('+scroll/1.2+'px)'});
				$('.fixed-header .container').css('opacity',(1-(scroll/400)));
			}
		});
		
        
        // Hover BG Effect
    
		$('.hover-background').each(function(){
			$(this).mousemove(function( event ) {
				$(this).find('.background-image-holder').css('transform', 'translate(' + -event.pageX /18 + 'px,' + -(event.pageY-($(window).scrollTop())) /50+ 'px)');
				$(this).find('.layer-1').css('transform', 'translate(' + -event.pageX /30 + 'px,' + -event.pageY /30+ 'px)');
				$(this).find('.layer-2').css('transform', 'translate(' + -event.pageX /20 + 'px,' + -event.pageY /20+ 'px)');
			});
		});
    }
   
    $('.promo-1 .btn').mouseenter(function(){
    	$(this).closest('.promo-1').find('.promo-image-holder').css('transform', 'scale(1.05)');
    }).mouseleave(function(){
    	$(this).closest('.promo-1').find('.promo-image-holder').css('transform', 'scale(1)');
    });
    
    // Project hover effects
    
    $('.hover-content').mouseenter(function(){
    	$(this).closest('.project').find('.background-image-holder').addClass('zoom');
    }).mouseleave(function(){
    	$(this).closest('.project').find('.background-image-holder').removeClass('zoom');
    });
    
    // Project filters
    
    // Populate filters
    $('.contained-projects').each(function(){
        
        var filters = "";

        $(this).find('.project').each(function(){
            
            var filterTags = $(this).attr('data-filter').split(',');
            
            filterTags.forEach(function(tagName){
                if(filters.indexOf(tagName) == -1){
                    filters += '<li data-filter="'+tagName+'">'+capitaliseFirstLetter(tagName)+'</li>';       
                }
            });
            $(this).closest('.contained-projects')
                   .find('ul.filters').empty().append('<li data-filter="all" class="active">All</li>').append(filters);
        });
    });

    $('.filters li').click(function(){
    	var filter = $(this).attr('data-filter');
    	$(this).closest('.filters').find('li').removeClass('active');
    	$(this).addClass('active');
    	
    	$(this).closest('.contained-projects').find('.project').each(function(){
            var filters = $(this).data('filter');
            
            if(filters.indexOf(filter) == -1){
                $(this).addClass('inactive');
            }
            else{
                $(this).removeClass('inactive');
            }
        });
    	
    	if(filter == 'all'){
    		$(this).closest('.contained-projects').find('.project').removeClass('inactive');
    	}
    });
    
    // Iframe fade-in dividers
    
    $('.video-strip .pre-video i').click(function(){
    	$(this).closest('.pre-video').addClass('fade-off');
    	$(this).closest('.video-strip').find('.iframe-holder').addClass('show-iframe');
    	var that = $(this);
    	setTimeout(function(){
    		that.closest('.video-strip').find('.iframe-holder').addClass('fade-on');
    	},500);
    });
    
    $('.video-strip .close-frame').click(function(){
    	$(this).closest('.iframe-holder').removeClass('fade-on');
    	var that = $(this);
    	setTimeout(function(){
    		that.closest('.video-strip').find('.iframe-holder').removeClass('show-iframe');
    		that.closest('.video-strip').find('.pre-video').removeClass('fade-off');
    	},500);
    });
    
    // Sliders
    
    $('.hero-slider').flexslider({ directionNav: false });
    $('.testimonials').flexslider({ directionNav: false });
    $('.image-slider').flexslider({ directionNav: false });
    
    // Twitter Feed
       jQuery('.tweets-feed').each(function(index) {
           jQuery(this).attr('id', 'tweets-' + index);
       }).each(function(index) {
           
           var TweetConfig = {
               "id": jQuery('#tweets-' + index).attr('data-widget-id'),
               "domId": '',
               "maxTweets": jQuery('#tweets-' + index).attr('data-amount'),
               "enableLinks": true,
               "showUser": true,
               "showTime": true,
               "dateFunction": '',
               "showRetweet": false,
               "customCallback": handleTweets
           };
           function handleTweets(tweets) {
               var x = tweets.length;
               var n = 0;
               var element = document.getElementById('tweets-' + index);
               var html = '<ul class="slides">';
               while (n < x) {
                   html += '<li>' + tweets[n] + '</li>';
                   n++;
               }
               html += '</ul>';
               element.innerHTML = html;
               return html;
           }
           twitterFetcher.fetch(TweetConfig);
       });

    // Instagram Feed
    
    if($('.instafeed').length){
    	jQuery.fn.spectragram.accessData = {
			accessToken: '353905890.5fb61a8.2ca992c196744b4d8beb76721bafcb7d',
			clientID: '5fb61a87907148958624944d4dff837d'
		};	

        $('.instafeed').each(function() {
            var feedID = $(this).attr('data-user-name');
            $(this).children('ul').spectragram('getUserFeed', {
                query: feedID,
                max: 12
            });
        });
    }   

   
    
    // Contact form code

    $('form.email-form, form.project-planner').submit(function (e) {
		// return false so form submits through jQuery rather than reloading page.
		if(e.preventDefault) e.preventDefault(); 
		else e.returnValue = false;
		
		var thisForm 		= $(this).closest('form'),
			error 			= 0,
			originalError 	= thisForm.attr('original-error'),
			loadingSpinner;
			
		if (typeof originalError !== typeof 'undefined' && originalError !== false) {
			thisForm.find('.form-error').text(originalError); 
		}
				

		error = validateFields(thisForm);
		

        if (error === 1){
            $(this).closest('form').find('.form-error').fadeIn(200);
        }else {
			// Hide the error if one was shown
			$(this).closest('form').find('.form-error').fadeOut(200);
			// Create a new loading spinner while hiding the submit button.
			loadingSpinner = $('<div />').addClass('form-loading').insertAfter($(thisForm).find('input[type="submit"]'));
			$(thisForm).find('input[type="submit"]').hide();
            
            jQuery.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: thisForm.serialize(),
                success: function (response) {
                	// Swiftmailer always sends back a number representing numner of emails sent.
					// If this is numeric (not Swift Mailer error text) AND greater than 0 then show success message.
					$(thisForm).find('.form-loading').remove();
					$(thisForm).find('input[type="submit"]').show();
					if($.isNumeric(response)){
						if(parseInt(response) > 0){
							thisForm.find('.form-success').fadeIn(1000);
							thisForm.find('.form-error').fadeOut(1000);
							setTimeout(function(){ thisForm.find('.form-success').fadeOut(500); }, 5000);
						}
					}
					// If error text was returned, put the text in the .form-error div and show it.
					else{
						// Keep the current error text in a data attribute on the form
						thisForm.find('.form-error').attr('original-error', thisForm.find('.form-error').text());
						// Show the error with the returned error text.
						thisForm.find('.form-error').text(response).fadeIn(1000);
						thisForm.find('.form-success').fadeOut(1000);
					}
                },
                error: function (errorObject, errorText, errorHTTP) {
                	// Keep the current error text in a data attribute on the form
					thisForm.find('.form-error').attr('original-error', thisForm.find('.form-error').text());
					// Show the error with the returned error text.
					thisForm.find('.form-error').text(errorHTTP).fadeIn(1000);
					thisForm.find('.form-success').fadeOut(1000);
                	$(thisForm).find('.form-loading').remove();
					$(thisForm).find('input[type="submit"]').show();
                }
            });
        }
		return false;
    });

	$('.validate-required, .validate-email').on('blur change', function(){
		validateFields($(this).closest('form'));
	});

	$('form').each(function(){
		if($(this).find('.form-error').length){
			$(this).attr('original-error', $(this).find('.form-error').text());
		}
	});

	function validateFields(form){
		var name, error, originalErrorMessage;

		form.find('.validate-required[type="checkbox"]').each(function(){
			if(!$('[name="'+$(this).attr('name')+'"]:checked').length){
				error = 1;
				name = $(this).attr('name').replace('[]', '');
				form.find('.form-error').text('Please tick at least one '+name+' box.');
			}
		});

		$(form).find('.validate-required').each(function(){
			if($(this).val() === ''){
				$(this).addClass('field-error');
				error = 1;
			}else{
				$(this).removeClass('field-error');
			}
		});
		
		$(form).find('.validate-email').each(function(){
			if(!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))){
				$(this).addClass('field-error');
				error = 1;
			}else{
				$(this).removeClass('field-error');
			}
		});

		if(!form.find('.field-error').length){
			form.find('.form-error').fadeOut(1000);
		}

		return error;
	}
	
	// Make map draggable when click
	
	$('.map-holder').click(function(){
		$(this).addClass('disable-overlay');
	});
	
	$(window).scroll(function(){
		$('.map-holder').removeClass('disable-overlay');
	});
    
});

$(window).load(function(){

	// Smooth scroll to inner links
	
	if($('nav').hasClass('nav-2')){
		$('.inner-link').smoothScroll({
			offset: -55,
			speed: 800
		});
	}else{
		var navHeight = $('nav').outerHeight();
		$('.inner-link').smoothScroll({
			offset: -navHeight,
			speed: 800
		});
    }
	
	// Initialize twitter feed
	
	var setUpTweets = setInterval(function(){
		if($('.tweets-slider').find('li.flex-active-slide').length){
			clearInterval(setUpTweets);
			return;
		}else{
			if($('.tweets-slider').length){
				$('.tweets-slider').flexslider({
					directionNav: false,
					controlNav: false
				});
			}
		}
    },500);
    
    // Show Background Images for sliders and dividers
    
    $('.background-image-holder').addClass('fadeIn');
    $('.foreground-image-holder').addClass('fadeIn');
	
    
    // Mailchimp forms
    
    // Mailchimp/Campaign Monitor Mail List Form Scripts
	$('form.mail-list-signup').on('submit', function(){
		
		var iFrame = $(this).closest('section, header, footer').find('iframe.mail-list-form'),
		thisForm 		= $(this).closest('.mail-list-signup'),
		userEmail 		= $(this).find('.signup-email-field').val(),
		userFullName 	= $(this).find('.signup-name-field').val(),
		userFirstName 	= $(this).find('.signup-first-name-field').val(),
		userLastName 	= $(this).find('.signup-last-name-field').val(),
		error			= 0;
		
		$(thisForm).find('.validate-required').each(function(){
			if($(this).val() === ''){
				$(this).addClass('field-error');
				error = 1;
			}
			else{
				$(this).removeClass('field-error');
			}
		});
		
		$(thisForm).find('.validate-email').each(function(){
			if(!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))){
				$(this).addClass('field-error');
				error = 1;
			}
			else{
				$(this).removeClass('field-error');
			}
		});
		
		if(error === 0){
			iFrame.contents().find('#mce-EMAIL, #fieldEmail').val(userEmail);
			iFrame.contents().find('#mce-LNAME, #fieldLastName').val(userLastName);
			iFrame.contents().find('#mce-FNAME, #fieldFirstName').val(userFirstName);
			iFrame.contents().find('#mce-FNAME, #fieldName').val(userFullName);		
			iFrame.contents().find('form').attr('target', '_blank').submit();
		}
		return false;
	});
    
    // Append Instagram BGs
    
    var setUpInstagram = setInterval(function(){
    	if($('.instafeed li').hasClass('bg-added')){
    		clearInterval(setUpInstagram);
			return;	
    	}else{
    		$('.instafeed li').each(function() {

				// Append background-image <img>'s as li item CSS background for better responsive performance
				var imgSrc = $(this).find('img').attr('src');
				$(this).css('background', 'url("' + imgSrc + '")');
				$(this).find('img').css('opacity', 0);
				$(this).css('background-position', '50% 0%');
				// Check if the slider has a color scheme attached, if so, apply it to the slider nav
				$(this).addClass('bg-added');
			});
			$('.instafeed').addClass('fadeIn');
    	}
    },500);
	
	
});

function capitaliseFirstLetter(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}


    
    // Lightbox gallery titles
    
    $('.lightbox-grid li a').each(function(){
    	var galleryTitle = $(this).closest('.lightbox-grid').attr('data-gallery-title');
    	$(this).attr('data-lightbox', galleryTitle);
    });
    
    // Multipurpose Modals
    
    jQuery('.foundry_modal[modal-link]').remove();

    if($('.foundry_modal').length && (!jQuery('.modal-screen').length)){
        // Add a div.modal-screen if there isn't already one there.
        var modalScreen = jQuery('<div />').addClass('modal-screen').appendTo('body');

    }

    jQuery('.foundry_modal').click(function(){
        jQuery(this).addClass('modal-acknowledged');
    });

    jQuery(document).on('wheel mousewheel scroll', '.foundry_modal, .modal-screen', function(evt){
        $(this).get(0).scrollTop += (evt.originalEvent.deltaY); 
        return false;
    });
    
    $('.modal-container:not([modal-link])').each(function(index) {
        if(jQuery(this).find('iframe[src]').length){
        	jQuery(this).find('.foundry_modal').addClass('iframe-modal');
        	var iframe = jQuery(this).find('iframe');
        	iframe.attr('data-src',iframe.attr('src'));
            iframe.attr('src', '');

        }
        jQuery(this).find('.btn-modal').attr('modal-link', index);

        // Only clone and append to body if there isn't already one there
        if(!jQuery('.foundry_modal[modal-link="'+index+'"]').length){
            jQuery(this).find('.foundry_modal').clone().appendTo('body').attr('modal-link', index).prepend(jQuery('<i class="ti-close close-modal">'));
        }
    });
    
    $('.btn-modal').unbind('click').click(function(){
    	var linkedModal = jQuery('.foundry_modal[modal-link="' + jQuery(this).attr('modal-link') + '"]'),
            autoplayMsg = "";
        jQuery('.modal-screen').toggleClass('reveal-modal');
        if(linkedModal.find('iframe').length){
            if(linkedModal.find('iframe').attr('data-autoplay') === '1'){
                var autoplayMsg = '&autoplay=1'
            }
        	linkedModal.find('iframe').attr('src', (linkedModal.find('iframe').attr('data-src') + autoplayMsg));
        }
        if(linkedModal.find('video').length){
            linkedModal.find('video').get(0).play();
        }
        linkedModal.toggleClass('reveal-modal');
        return false; 
    });
    
    // Autoshow modals
	
	$('.foundry_modal[data-time-delay]').each(function(){
		var modal = $(this);
		var delay = modal.attr('data-time-delay');
		modal.prepend($('<i class="ti-close close-modal">'));
    	if(typeof modal.attr('data-cookie') != "undefined"){
        	if(!mr_cookies.hasItem(modal.attr('data-cookie'))){
                setTimeout(function(){
        			modal.addClass('reveal-modal');
        			$('.modal-screen').addClass('reveal-modal');
        		},delay);
            }
        }else{
            setTimeout(function(){
                modal.addClass('reveal-modal');
                $('.modal-screen').addClass('reveal-modal');
            },delay);
        }
	});

    // Exit modals
    $('.foundry_modal[data-show-on-exit]').each(function(){
        var modal = $(this);
        var exitSelector = $(modal.attr('data-show-on-exit'));
        // If a valid selector is found, attach leave event to show modal.
        if($(exitSelector).length){
            modal.prepend($('<i class="ti-close close-modal">'));
            $(document).on('mouseleave', exitSelector, function(){
                if(!$('body .reveal-modal').length){
                    if(typeof modal.attr('data-cookie') !== typeof undefined){
                        if(!mr_cookies.hasItem(modal.attr('data-cookie'))){
                            modal.addClass('reveal-modal');
                            $('.modal-screen').addClass('reveal-modal');
                        }
                    }else{
                        modal.addClass('reveal-modal');
                        $('.modal-screen').addClass('reveal-modal');
                    }
                }
            });
        }
    });

    // Autoclose modals

    $('.foundry_modal[data-hide-after]').each(function(){
        var modal = $(this);
        var delay = modal.attr('data-hide-after');
        if(typeof modal.attr('data-cookie') != "undefined"){
            if(!mr_cookies.hasItem(modal.attr('data-cookie'))){
                setTimeout(function(){
                if(!modal.hasClass('modal-acknowledged')){
                    modal.removeClass('reveal-modal');
                    $('.modal-screen').removeClass('reveal-modal');
                }
                },delay); 
            }
        }else{
            setTimeout(function(){
                if(!modal.hasClass('modal-acknowledged')){
                    modal.removeClass('reveal-modal');
                    $('.modal-screen').removeClass('reveal-modal');
                }
            },delay); 
        }
    });
    
    jQuery('.close-modal:not(.modal-strip .close-modal)').unbind('click').click(function(){
    	var modal = jQuery(this).closest('.foundry_modal');
        modal.toggleClass('reveal-modal');
        if(typeof modal.attr('data-cookie') !== "undefined"){
            mr_cookies.setItem(modal.attr('data-cookie'), "true", Infinity);
        }
    	if(modal.find('iframe').length){
            modal.find('iframe').attr('src', '');
        }
        jQuery('.modal-screen').removeClass('reveal-modal');
    });
    
    jQuery('.modal-screen').unbind('click').click(function(){
        if(jQuery('.foundry_modal.reveal-modal').find('iframe').length){
            jQuery('.foundry_modal.reveal-modal').find('iframe').attr('src', '');
        }
    	jQuery('.foundry_modal.reveal-modal').toggleClass('reveal-modal');
    	jQuery(this).toggleClass('reveal-modal');
    });
    
    jQuery(document).keyup(function(e) {
		 if (e.keyCode == 27) { // escape key maps to keycode `27`
            if(jQuery('.foundry_modal').find('iframe').length){
                jQuery('.foundry_modal').find('iframe').attr('src', '');
            }
			jQuery('.foundry_modal').removeClass('reveal-modal');
			jQuery('.modal-screen').removeClass('reveal-modal');
		}
	});
    
    // Modal Strips
    
    jQuery('.modal-strip').each(function(){
    	if(!jQuery(this).find('.close-modal').length){
    		jQuery(this).append(jQuery('<i class="ti-close close-modal">'));
    	}
    	var modal = jQuery(this);

        if(typeof modal.attr('data-cookie') != "undefined"){
           
            if(!mr_cookies.hasItem(modal.attr('data-cookie'))){
            	setTimeout(function(){
            		modal.addClass('reveal-modal');
            	},1000);
            }
        }else{
            setTimeout(function(){
                    modal.addClass('reveal-modal');
            },1000);
        }
    });
    
    jQuery('.modal-strip .close-modal').click(function(){
        var modal = jQuery(this).closest('.modal-strip');
        if(typeof modal.attr('data-cookie') != "undefined"){
            mr_cookies.setItem(modal.attr('data-cookie'), "true", Infinity);
        }
    	jQuery(this).closest('.modal-strip').removeClass('reveal-modal');
    	return false;
    });


    // Video Modals

    jQuery('.close-iframe').click(function() {
        jQuery(this).closest('.modal-video').removeClass('reveal-modal');
        jQuery(this).siblings('iframe').attr('src', '');
        jQuery(this).siblings('video').get(0).pause();
    });

/*\
|*|  END COOKIE LIBRARY
\*/
