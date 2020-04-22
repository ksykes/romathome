
	<?php if (isset($content['field_thumbnail'])) {
		print render($content['field_thumbnail']);
	} ?>		
	
	<div class="related-content-copy">
		<?php if (isset($content['field_url'])) {
			print render($content['field_url']);
		} ?>
		
		<?php if (isset($content['field_text'])) {
			print render($content['field_text']);
		} ?>
	</div>