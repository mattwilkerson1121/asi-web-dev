(function($) {

    $.fn.asiHero = function( options ) {
        // Establish our default settings
        var settings = $.extend(
          true, {
            responsiveMode : 'responsive', // responsive or adaptive
            adaptiveImg : [],
            layout : 'fluid',
            eleId : null,
            dataPosition : null,
            divider : 'false',
            contentCol : null,
            offerContentType: null,
            offerContentImg: null,
            urgencyText : null,
            headlineText : null,
            messageText : null,
            messageSubText : null,
            textAlign : null,
            fontColor: null,
            bgColor: null,
            bgImage: null,
            bgColorContent: null,
            paddingSection: null,
            paddingContent: null,
            addButton: 'false',
            buttonClass: 'btn asi-btn asi-btn-white asi-btn-white',
            buttonText: 'BUTTON',
            buttonLink: null,
            buttonTarget: null,
            addDetailsButton:'false',
            complete: null
          }, options, $(this).data()
        );

        return this.each(function() {
        	if ( settings.responsiveMode == 'responsive'){
	        	$(this).html(
	    			'<div class="asi-module-wrapper">'+
	    				'<div class="asi-module-container">'+
	    					'<div class="asi-module-content">'+
								'<div class="asi-module-body">'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'
				);
        	}
        	/*
        	<div class="row-fluid home-content-row clearfix">
		        <div class="pe-type-id-417"></div>
		        <div class="asi-module-wrapper">
		            <div class="asi-module-container asi-fixed-width">
		                <div class="asi-module-content" style="padding:15px;background:green;">
		                    <div class="asi-module-body" style="padding:15px;background:blue;min-height:50px;">
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <style>
		        .asi-module-wrapper,
		        .asi-container,
		        .asi-module-content{position;relative;padding:0;width;100%;margin:0;}
		        .asi-fixed-width{max-width:1180px; margin:0 auto;}
		    </style>
		    */
        	if (( settings.responsiveMode == 'adaptive') && ( settings.adaptiveImg != null)){
        		$(this).html(
	    			'<div class="section asi-section asi-mix-hero-wrapper">'+
	    				'<div class="asi-mix-contents asi-bg-hero-image asi-adaptive-hero">'+
	    					'<a href="'+settings.adaptiveImg['img-link']+'">'+
	    						'<img class="data-img img-data img-responsive" data-pos="'+settings.adaptiveImg['data-pos']+'" '+
	    						'src="'+settings.adaptiveImg['src']+'" '+
	    						'data-lrg="'+settings.adaptiveImg['data-lrg']+'" '+
	    						'data-med="'+settings.adaptiveImg['data-lrg']+'" '+
	    						'data-sml="'+settings.adaptiveImg['data-lrg']+'">'+
	    					'</a>'+
						'</div>'+
					'</div>'
				);
        	}
        	if (( settings.responsiveMode == 'adaptive') && ( settings.adaptiveImg == null)){
        		alert('You must also set the adaptiveImage options when responsiveMode = adaptive');
        	}
        	if ( settings.layout == 'fixed' ) {
		        $(this).find('.asi-module-container').addClass('asi-fixed-width');
		    }
		    if ( settings.layout == 'fluid' ) {
		        $(this).find('.asi-module-container').addClass('asi-fluid-width');
		    }
		    if ( settings.eleId ) {
		    	$(this).find('.asi-module-wrapper').attr( 'id', settings.eleId );
		    }
		    if ( settings.contentCol ) {
		    	$(this).find('.asi-module-body').addClass( settings.contentCol );
		    }
		    if ( settings.offerContentType == 'image') {
		    	$(this).find('.asi-module-body').html(settings.offerContentImg);
		    }
        	if ( settings.urgencyText ) {
        		$(this).find('.asi-module-body').prepend('<p class="asi-urgency-msg">'+settings.urgencyText+'</p>');
        	}
        	if (( settings.divider == 'true' ) && ( settings.urgencyText != null )) {
        		$(this).find('.asi-module-body p.asi-urgency-msg').after('<div class="asi-divider"><div class="asi-divider-line"></div></div>');
        	}else if ( settings.divider == 'true' ){
        		$(this).find('.asi-module-body').prepend('<div class="asi-divider"><div class="asi-divider-line"></div></div>');
        	}
	    	if ( settings.headlineText ) {
	    		$(this).find('#asi-hero-wrapper p:eq(1)').before( settings.headlineText );
	    	}
	    	if ( settings.messageText ) {
	    		$(this).find('.asi-mix-contents p.asi-lead').html( settings.messageText );
	    	}
	    	if ( settings.messageSubText ) {
	    		$(this).find('.asi-mix-contents p.asi-sub-lead').html( settings.messageSubText );
	    	}
	    	if ( settings.textAlign ) {
	    		$(this).find('.asi-mix-contents h1, .asi-mix-contents p, .asi-mix-contents .asi-btn').addClass( settings.textAlign );
	    	}
		    if ( settings.fontColor ) {
		        $(this).find('.asi-mix-contents h1, .asi-mix-contents p').css( 'color', settings.fontColor );
		    }
		    if ( settings.bgColor ) {
		        $(this).find('.asi-mix-contents').css( 'background-color', settings.bgColor );
		    }
		    if ( settings.bgImage ) {
		        $(this).find('.asi-mix-contents').attr( 'style', 'background-image:url('+settings.bgImage+');');
		    }
		    if ( settings.bgColorContent ) {
		    	$(this).find('.asi-mix-contents .asi-section-content-wrapper').css('background-color', settings.bgColorContent);
		    }
		    if ( settings.paddingSection ) {
		    	$(this).find('.asi-mix-contents .asi-section').css('padding', settings.paddingSection);
		    }
		    if ( settings.paddingBody ) {
		    	$(this).find('.asi-mix-contents .asi-content-body').css('padding', settings.paddingBody);
		    }
		    if ( settings.paddingContent ) {
		    	$(this).find('.asi-mix-contents .asi-section-content-wrapper').css('padding', settings.paddingContent);
		    }
		    if ( settings.addButton == 'true' ){
		    	$(this).find('.asi-mix-contents .asi-sub-lead').after('<div id="asi-hero-btn-wrap"><a id="asiHero-button-link"><button id="asiHero-button">'+settings.buttonText+'</button></a></div>');
		    }
		    if ( settings.buttonClass ) {
		    	$(this).find('.asi-mix-contents #asiHero-button').attr('class', settings.buttonClass);
		    }
		    if (settings.buttonLink){
		    	$(this).find('.asi-mix-contents #asiHero-button-link').attr('href', settings.buttonLink);
		    }
		    if (settings.buttonTarget){
		    	$(this).find('.asi-mix-contents #asiHero-button-link').attr('target', settings.buttonTarget);
		    }
		    if ( settings.dataPosition ){
		    	$(this).find('a').attr('data-pos', settings.dataPosition);
		    }
		    if ( settings.addDetailsButton == 'true' ){
		    	$(this).find('.asi-mix-contents .asi-section-content-wrapper').append('<div id="asi-offer-details"><a id="asi-offer-details-link" href="#asi-details-modal" data-toggle="modal">details</a></div>');
		    }
		    if ($.isFunction( settings.complete )) { 
		    	settings.complete.call( this );
			}
		});
	}

}(jQuery));

