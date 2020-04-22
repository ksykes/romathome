
	<?php if (isset($content['field_thumbnail'])) { ?>
		<div class="resource-pdf">
			<div class="pdf-image">
				<?php print render($content['field_thumbnail']); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php print_r($content['field_pdf']); ?>
	<?php if (isset($content['field_pdf'])) { ?>
		<div class="pdf-description">
			<a href="<?php print render($content['field_pdf']['#items'][0]['uri']); ?>"><?php print render($content['field_pdf']['#items'][0]['description']); ?></a>

		<?php if (isset($content['field_pdf'])) {
			print render($content['field_pdf']);
		} ?>

		<?php if (isset($content['field_text'])) {
			print render($content['field_text']);
		} ?>
		</div>
	<?php } ?>