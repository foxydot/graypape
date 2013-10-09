<?php
remove_action('genesis_post_content', 'genesis_do_post_content');
add_action('genesis_before_loop','msd_taxonomy_description');
//add_action('genesis_before_loop','msd_taxonomy_children');
add_filter('genesis_post_title_text','msd_add_arrow_to_title');
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
add_action('genesis_sidebar','msd_sidebar_taxonomy_menu');
genesis();

function msd_add_arrow_to_title($title){
    $title = $title . ' <i class="icon-circle-arrow-right"></i>';
    return $title;
}
?>
