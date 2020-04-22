<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
	<h3><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach (array_chunk($rows, 3) as $image_row): ?>
    <div class="image-row small clearfix">
        <?php foreach ($image_row as $image_group): ?>
            <div class="image-group"><?= $image_group ?></div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>