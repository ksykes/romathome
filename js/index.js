(function ($) {
  Drupal.behaviors.watch = {
    attach: function(context, settings) {
      // This code is fired both when the page is 'ready'
      // in the jquery sense, and when new content
      // is 'attached' via Drupal ajax. The settings
      // values that are available to us here
      // are provided in the third parameter of
      // ajax_command_replace() as an associative array.
      // My new content is already part of the dom
      // so I can act on it here.
      $('select#edit-tid', context).once('dropdown-style', function () {
         change_ddl_appearance('select#edit-tid', 'tid-list'); //Since its Ajax refresh, we have to recreate it everytimes the Ajax content is replaced
      });
      
    }
    }
	
	//Create captions for all full length images
	$(window).load(function(){
		var title = '';
		var currentImage;
		$('.page-type-article #content img').each(function(){
			currentImage = $(this);
			if (currentImage.attr('title')) {
				title = currentImage.attr('title');
				currentImage.after('<div class="caption">' + title + '</div>');
				currentImage.removeAttr('title');
			}
		});
	});
	
})(jQuery);
	
