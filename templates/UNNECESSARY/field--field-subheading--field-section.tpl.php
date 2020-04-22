
	<?php if (!$label_hidden) : ?>
		<h3><?php print $label ?></h3>
	<?php endif; ?>
	<?php foreach ($items as $delta => $item): ?>
		<h3 class="subheading"<?php print $item_attributes[$delta]; ?>><?php print strip_tags(render($item), '<em>'); ?></h3>
	<?php endforeach; ?> 