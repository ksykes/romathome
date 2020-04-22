
	<?php if (!$label_hidden) : ?>
		<h3><?php print $label ?></h3>
	<?php endif; ?>
		
	<?php foreach ($items as $delta => $item): ?>
		<address class="author"<?php print $item_attributes[$delta]; ?>><?php print t('By'); ?>&nbsp;<?php print render($item); ?></address>
	<?php endforeach; ?>