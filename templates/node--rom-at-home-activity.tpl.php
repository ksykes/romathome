<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

	<?php print $user_picture; ?>

	<?php print render($title_prefix); ?>
  
	<?php if (!$page) { ?>
		<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
	<?php } ?>
  
  
	<?php print render($title_suffix); ?>

  <?php if ($display_submitted) { ?>
	<div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php } ?>

	<div class="content"<?php print $content_attributes; ?>>

	<!-- print series wordmark by title -->
	<?php if (isset($content['field_series'])) {
		$term = taxonomy_term_load($node->field_series['und'][0]['tid']);
		// $result=field_view_field('taxonomy_term',$term,'field_image');
		// echo render($result)
		print render($term);
	} ?>

		<div class="activity-metadata">
			<div class="activity-tags">
				<?php if (isset($content['field_rah_activity_type'])) {
					print render($content['field_rah_activity_type']);
				} ?>
	
				<?php if (isset($content['field_series'])) {
					print render($content['field_series']);
				} ?>
			</div>
			
			<div class="addthis_inline_share_toolbox"></div>
		</div>
		
		<?php if (isset($content['field_activity_components'])) {
			print render($content['field_activity_components']);
		} ?>

		<div class="related-content">
			<?php if (isset($content['field_related_content'])) {
				print render($content['field_related_content']);
			} ?>

			<!-- if series field is set, print related series content block -->
			<!-- <?php if (isset($content['field_series'])) {
				print block_render('views', 'rom-at-home-series-block');
			} ?> -->
		</div>
  
	</div>

</article>