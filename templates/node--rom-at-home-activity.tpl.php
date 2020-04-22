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

		<?php if (isset($content['field_long_subtitle'])) {
			print render($content['field_long_subtitle']);
		} ?>
		
		<div class="byline vcard">
			<?php if (isset($content['field_author_name'])) {
				print render($content['field_author_name']);
			} ?>			
			<?php if (isset($content['field_posting_date'])) {
				print render($content['field_posting_date']);
			} ?>
			<div class="addthis_inline_share_toolbox"></div>
		</div>
		
		<?php if (isset($content['field_lead_image'])) {
			print render($content['field_lead_image']);
		} ?>		
		
		<?php if (isset($content['field_activity_components'])) {
			print render($content['field_activity_components']);
		} ?>		
		
		<?php if (isset($content['field_related_content'])) {
			print render($content['field_related_content']);
		} ?>
		
		<?php if (isset($content['field_article_footer'])) {
			print render($content['field_article_footer']);
		} ?>
  
	</div>

</article>