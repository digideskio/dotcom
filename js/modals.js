    
    // Lightbox gallery titles
    
    $('.lightbox-grid li a').each(function(){
    	var galleryTitle = $(this).closest('.lightbox-grid').attr('data-gallery-title');
    	$(this).attr('data-lightbox', galleryTitle);
    });
    
    // Multipurpose Modals
    
    if($('.foundry_modal').length){
    	var modalScreen = $('<div class="modal-screen">').appendTo('body');
    }
    
    $('.modal-container').each(function(index) {
        if($(this).find('iframe[src]').length){
        	$(this).find('.foundry_modal').addClass('iframe-modal');
        	var iframe = $(this).find('iframe');
        	var src = iframe.attr('src');
        	iframe.attr('src', '');
        	iframe.data('data-src');
        	iframe.attr('data-src', src);
        }
        $(this).find('.btn-modal').attr('modal-link', index);
        $(this).find('.foundry_modal').clone().appendTo('body').attr('modal-link', index).prepend($('<i class="ti-close close-modal">'));
    });
    
    $('.btn-modal').click(function(){
    	var linkedModal = $('section').closest('body').find('.foundry_modal[modal-link="' + $(this).attr('modal-link') + '"]');
        $('.modal-screen').toggleClass('reveal-modal');
        if(linkedModal.find('iframe').length){
        	linkedModal.find('iframe').attr('src', linkedModal.find('iframe').attr('data-src'));
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
    
    $('.close-modal:not(.modal-strip .close-modal)').click(function(){
    	var modal = $(this).closest('.foundry_modal');
        modal.toggleClass('reveal-modal');
        if(typeof modal.attr('data-cookie') != "undefined"){
            mr_cookies.setItem(modal.attr('data-cookie'), "true", Infinity);
        }
    	
        $('.modal-screen').toggleClass('reveal-modal');
    });
    
    $('.modal-screen').click(function(){
    	$('.foundry_modal.reveal-modal').toggleClass('reveal-modal');
    	$(this).toggleClass('reveal-modal');
    });
    
    $(document).keyup(function(e) {
		 if (e.keyCode == 27) { // escape key maps to keycode `27`
			$('.foundry_modal').removeClass('reveal-modal');
			$('.modal-screen').removeClass('reveal-modal');
		}
	});
    
    // Modal Strips
    
    $('.modal-strip').each(function(){
    	if(!$(this).find('.close-modal').length){
    		$(this).append($('<i class="ti-close close-modal">'));
    	}
    	var modal = $(this);

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
    
    $('.modal-strip .close-modal').click(function(){
        var modal = $(this).closest('.modal-strip');
        if(typeof modal.attr('data-cookie') != "undefined"){
            mr_cookies.setItem(modal.attr('data-cookie'), "true", Infinity);
        }
    	$(this).closest('.modal-strip').removeClass('reveal-modal');
    	return false;
    });


    // Video Modals
    $('section').closest('body').find('.modal-video[video-link]').remove();

    $('.modal-video-container').each(function(index) {
        $(this).find('.play-button').attr('video-link', index);
        $(this).find('.modal-video').clone().appendTo('body').attr('video-link', index);
    });

    $('.modal-video-container .play-button').click(function() {
        var linkedVideo = $('section').closest('body').find('.modal-video[video-link="' + $(this).attr('video-link') + '"]');
        linkedVideo.toggleClass('reveal-modal');

        if (linkedVideo.find('video').length) {
            linkedVideo.find('video').get(0).play();
        }

        if (linkedVideo.find('iframe').length) {
            var iframe = linkedVideo.find('iframe');
            var iframeSrc = iframe.attr('data-src');
            var autoplayMsg;
            if(iframeSrc.indexOf('vimeo') > -1){
            	autoplayMsg = '&autoplay=1';
            }else{
            	autoplayMsg = '?autoplay-1';
            }
            var iframeSrc = iframe.attr('data-src') + autoplayMsg;
            iframe.attr('src', iframeSrc);
        }
    });

    $('section').closest('body').find('.close-iframe').click(function() {
        $(this).closest('.modal-video').toggleClass('reveal-modal');
        $(this).siblings('iframe').attr('src', '');
        $(this).siblings('video').get(0).pause();
    });

    // Local Videos

    $('section').closest('body').find('.local-video-container .play-button').click(function() {
        $(this).siblings('.background-image-holder').removeClass('fadeIn');
        $(this).siblings('.background-image-holder').css('z-index', -1);
        $(this).css('opacity', 0);
        $(this).siblings('video').get(0).play();
    });

    // Youtube Videos

    $('section').closest('body').find('.player').each(function() {
        var src = $(this).attr('data-video-id');
        var startat = $(this).attr('data-start-at');
        $(this).attr('data-property', "{videoURL:'http://youtu.be/" + src + "',containment:'self',autoPlay:true, mute:true, startAt:" + startat + ", opacity:1, showControls:false}");
    });

	if($('.player').length){
    	$('section').closest('body').find(".player").YTPlayer();
    }

