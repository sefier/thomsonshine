(function(jQuery) {
	
	jQuery.fn.bar = function(options) {
		var opts = jQuery.extend({}, jQuery.fn.bar.defaults, options);
		return this.each(function() {
			jQuerythis = jQuery(this);
			var o = jQuery.meta ? jQuery.extend({}, opts, jQuerythis.data()) : opts;

			if(!jQuery('.jbar').length){
				timeout = setTimeout('jQuery.fn.bar.removebar()',o.time);
				var _message_span = jQuery(document.createElement('span')).addClass('jbar-content').html(o.message);
				_message_span.css({"color" : o.color});
				var _wrap_bar;
				(o.position == 'bottom') ? 
				_wrap_bar	  = jQuery(document.createElement('div')).addClass('jbar jbar-bottom'):
				_wrap_bar	  = jQuery(document.createElement('div')).addClass('jbar jbar-top') ;
				
				_wrap_bar.css({"background-color" 	: o.background_color});
				if(o.removebutton){
					var _remove_cross = jQuery(document.createElement('a')).addClass('jbar-cross');
					_remove_cross.click(function(e){jQuery.fn.bar.removebar();})
				}
				else{				
					_wrap_bar.css({"cursor"	: "pointer"});
					_wrap_bar.click(function(e){jQuery.fn.bar.removebar();})
				}	
				_wrap_bar.append(_message_span).append(_remove_cross).hide().insertBefore(jQuery('.content')).fadeIn('fast');
			}			
		});
	};
	var timeout;
	jQuery.fn.bar.removebar 	= function(txt) {
		if(jQuery('.jbar').length){
			clearTimeout(timeout);
			jQuery('.jbar').fadeOut('fast',function(){
				jQuery(this).remove();
			});
		}	
	};
	jQuery.fn.bar.defaults = {
		background_color 	: '#FFFFFF',
		color 				: '#000',
		position		 	: 'top',
		removebutton     	: true,
		time			 	: 5000	
	};
	
})(jQuery);