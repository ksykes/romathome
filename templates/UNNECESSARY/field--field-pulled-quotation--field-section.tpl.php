
	<?php if (!$label_hidden) : ?>
		<h3><?php print $label ?></h3>
	<?php endif; ?>
	<?php foreach ($items as $delta => $item): ?>
		<div class="pulled-quote">
			<p><?php print rtrim(strip_tags(render($item),'<em>'), ' '); ?></p>
			<span class="open">&ldquo;</span>
			<span class="close">&rdquo;</span>
		</div>
	<?php endforeach; ?> 