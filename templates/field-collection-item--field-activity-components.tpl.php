
	<?php if (isset($content['field_text'])) {
		print render($content['field_text']);
	} ?>		
	
	<?php if (isset($content['field_subheading'])) {
		print render($content['field_subheading']);
	} ?>		
	
	<?php if (isset($content['field_lead_images'])) {
		print render($content['field_lead_images']);
	} ?>	
	
	<?php if (isset($content['field_video'])) {
		print render($content['field_video']);
	} ?>

	<?php if (isset($content['field_list'])) {
		print render($content['field_list']);
	} ?>

	<?php if (isset($content['field_resource_pdfs'])) {
		print render($content['field_resource_pdfs']);
	} ?>