<?php
remove_action('genesis_post_content', 'genesis_do_post_content');
add_action('genesis_before_loop','msd_taxonomy_description');
add_action('genesis_before_loop','msd_taxonomy_children');
genesis();
?>
