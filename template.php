<?php

// function magazine_js_alter(&$javascript) {
//     unset($javascript['sites/all/themes/rom/js/common.js']);
// }

// function magazine_field_collection_view($variables) {
// 	print $element['#children'];
// }

// load social links js file
function romathome_preprocess_html(&$variables) {
    drupal_add_js('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a96f0c85e816089', 'external');
}

// render related series content block
function block_render($views, $rom_at_home_series_block) {
    $block = block_load($views, $rom-at-home-series-block);
    $block_content = _block_render_blocks(array($block));
    $build = _block_get_renderable_array($block_content);
    $block_rendered = drupal_render($build);
    return $block_rendered;
}